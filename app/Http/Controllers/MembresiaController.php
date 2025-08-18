<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use Illuminate\Http\Request;

class MembresiaController extends Controller
{
    public function index()
    {
        $membresias = Membresia::with('cliente')->get();
        return response()->json($membresias);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_cliente'   => 'required|exists:clientes,id',
            'tipo'         => 'required|string|max:50',
            'fecha_inicio' => 'required|date',
            'fecha_fin'    => 'nullable|date|after_or_equal:fecha_inicio',
            'estado'       => 'required|in:activo,inactivo',
        ]);

        $membresia = Membresia::create($request->all());

        return response()->json([
            'message' => 'Membresía creada exitosamente',
            'data'    => $membresia
        ], 201);
    }

    public function show($id)
    {
        $membresia = Membresia::with('cliente')->findOrFail($id);
        return response()->json($membresia);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_cliente'   => 'required|exists:clientes,id',
            'tipo'         => 'required|string|max:50',
            'fecha_inicio' => 'required|date',
            'fecha_fin'    => 'nullable|date|after_or_equal:fecha_inicio',
            'estado'       => 'required|in:activo,inactivo',
        ]);

        $membresia = Membresia::findOrFail($id);
        $membresia->update($request->all());

        return response()->json([
            'message' => 'Membresía actualizada exitosamente',
            'data'    => $membresia
        ]);
    }

    public function destroy($id)
    {
        $membresia = Membresia::findOrFail($id);
        $membresia->delete();

        return response()->json([
            'message' => 'Membresía eliminada correctamente'
        ]);
    }
}
