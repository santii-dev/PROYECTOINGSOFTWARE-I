<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return response()->json($proyectos, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:45',
            'Descripcion' => 'required|string|max:45',
            'Nota' => 'required|string|max:45',
            'Guia' => 'required|string|max:255', // URL or path to file
            'Recursos_materiales' => 'nullable|string|max:45',
            'Instrucciones' => 'nullable|string',
            'Profesores_id_Profesores' => 'required|exists:Profesores,id_Profesores',
        ]);

        $proyecto = Proyecto::create($validatedData);

        return response()->json($proyecto, 201);
    }

    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return response()->json($proyecto, 200);
    }

    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::findOrFail($id);

        $validatedData = $request->validate([
            'Nombre' => 'sometimes|required|string|max:45',
            'Descripcion' => 'sometimes|required|string|max:45',
            'Nota' => 'sometimes|required|string|max:45',
            'Guia' => 'sometimes|required|string|max:255', // URL or path to file
            'Recursos_materiales' => 'nullable|string|max:45',
            'Instrucciones' => 'nullable|string',
            'Profesores_id_Profesores' => 'sometimes|required|exists:Profesores,id_Profesores',
        ]);

        $proyecto->update($validatedData);

        return response()->json($proyecto, 200);
    }

    public function destroy($id)
    {
        Proyecto::destroy($id);
        return response()->json(null, 204);
    }
}



