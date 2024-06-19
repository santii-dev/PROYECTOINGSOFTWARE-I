<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Utils\Respuestas;

class ClienteController extends Controller
{
    protected $respuestas;

    public function __construct()
    {
        $this->respuestas = new Respuestas();
    }

    public function index(Request $request)
    {
        if ($request->has('page')) {
            $pagina = $request->input('page');
            if ($pagina == "all") {
                $clientes = Cliente::all();
            } else {
                $cantidad = 10;
                $inicio = ($pagina - 1) * $cantidad;
                $clientes = Cliente::offset($inicio)->limit($cantidad)->get();
            }
            return response()->json($clientes);
        } else {
            return $this->respuestas->error_400();
        }
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            return response()->json($cliente);
        } else {
            return $this->respuestas->error_400();
        }
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cedula' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email',
            'numero_celular' => 'required',
            'direccion' => 'required',
        ]);

        $cliente = Cliente::create($validated);

        $usuario = $this->generarUsuario($cliente->nombre, $cliente->apellidos);
        $contrasena = $this->generarContrasena();
        DB::table('usuarios')->insert([
            'id_cliente' => $cliente->id_cliente,
            'usuario' => $usuario,
            'contrasena' => $contrasena,
            'estado' => 'Activo',
        ]);

        $this->enviarCorreo($cliente->email, $usuario, $contrasena);

        return response()->json(['id_cliente' => $cliente->id_cliente, 'usuario' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            $cliente->update($request->all());
            return response()->json(['id_cliente' => $cliente->id_cliente]);
        } else {
            return $this->respuestas->error_400();
        }
    }

    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'id_cliente' => 'required'
        ]);

        $cliente = Cliente::find($validated['id_cliente']);
        if ($cliente) {
            $cliente->delete();
            return response()->json(['id_cliente' => $cliente->id_cliente]);
        } else {
            return $this->respuestas->error_400();
        }
    }

    private function generarUsuario($nombre, $apellidos)
    {
        $baseUsuario = strtolower($nombre[0]) . strtolower($apellidos);
        $usuario = $baseUsuario;
        $contador = 1;

        while (DB::table('usuarios')->where('usuario', $usuario)->exists()) {
            $usuario = $baseUsuario . $contador;
            $contador++;
        }

        return $usuario;
    }

    private function generarContrasena()
    {
        return bin2hex(random_bytes(4));
    }

    private function enviarCorreo($email, $usuario, $contrasena)
    {
        $asunto = "Datos de acceso a la tienda";
        $mensaje = "Hola,\n\nSe ha creado una cuenta para ti en nuestra tienda.\n\nUsuario: $usuario\nContraseña: $contrasena\n\nPor favor, cambia tu contraseña después de iniciar sesión.";
        
        Mail::raw($mensaje, function ($message) use ($email, $asunto) {
            $message->to($email)->subject($asunto);
        });
    }
}

