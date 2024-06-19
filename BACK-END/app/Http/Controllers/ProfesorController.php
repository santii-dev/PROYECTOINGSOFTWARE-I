<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        return response()->json(Profesor::all(), 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Apellidos' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:Profesores',
            'Contraseña' => 'required|string|max:255',
            'Rol' => 'required|string|max:255',
        ]);

        $profesor = Profesor::create($validatedData);

        return response()->json($profesor, 201);
    }

    public function show($id)
    {
        $profesor = Profesor::findOrFail($id);
        return response()->json($profesor, 200);
    }

    public function update(Request $request, $id)
    {
        $profesor = Profesor::findOrFail($id);

        $validatedData = $request->validate([
            'Nombre' => 'sometimes|required|string|max:255',
            'Apellidos' => 'sometimes|required|string|max:255',
            'Email' => 'sometimes|required|string|email|max:255|unique:Profesores,Email,' . $id . ',id_Profesores',
            'Contraseña' => 'sometimes|required|string|max:255',
            'Rol' => 'sometimes|required|string|max:255',
        ]);

        $profesor->update($validatedData);

        return response()->json($profesor, 200);
    }

    public function destroy($id)
    {
        Profesor::destroy($id);
        return response()->json(null, 204);
    }
}

