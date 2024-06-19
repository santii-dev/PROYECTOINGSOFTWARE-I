<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        $asignaturas = Asignatura::all();
        return response()->json($asignaturas, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
        ]);

        $asignatura = Asignatura::create([
            'Nombre' => $request->input('Nombre')
        ]);

        return response()->json($asignatura, 201);
    }

    public function show($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        return response()->json($asignatura, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
        ]);

        $asignatura = Asignatura::findOrFail($id);
        $asignatura->update([
            'Nombre' => $request->input('Nombre')
        ]);

        return response()->json($asignatura, 200);
    }

    public function destroy($id)
    {
        Asignatura::destroy($id);
        return response()->json(null, 204);
    }
}
