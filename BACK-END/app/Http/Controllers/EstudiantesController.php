<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiantes::all();
        return response()->json($estudiantes, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:45',
            'Email' => 'required|string|max:45',
            'Contraseña' => 'required|string|max:45',
            'Rol' => 'required|string|max:255',
            'Proyectos_id_Proyectos' => 'required|exists:Proyectos,id_Proyectos', // Clave foránea correcta
        ]);

        $estudiante = Estudiantes::create($validatedData);

        return response()->json($estudiante, 201);
    }

    public function show($id)
    {
        $estudiante = Estudiantes::findOrFail($id);
        return response()->json($estudiante, 200);
    }

    public function update(Request $request, $id)
    {
        $estudiante = Estudiantes::findOrFail($id);

        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:45',
            'Email' => 'required|string|max:45',
            'Contraseña' => 'required|string|max:45',
            'Rol' => 'required|string|max:255',
            'Proyectos_id_Proyectos' => 'required|exists:Proyectos,id_Proyectos', // Clave foránea correcta
        ]);

        $estudiante->update($validatedData);

        return response()->json($estudiante, 200);
    }

    public function destroy($id)
    {
        Estudiantes::destroy($id);
        return response()->json(null, 204);
    }
}
