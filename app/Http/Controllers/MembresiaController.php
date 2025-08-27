<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Membresia;
use Illuminate\Http\Request;

class MembresiaController extends Controller
{
    public function index()
    {
        $membresias = Membresia::with('cliente')->get();
        return view('membresias.index', compact('membresias'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('membresias.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_cliente'   => 'required|exists:clientes,id',
            'tipo'         => 'required|string|max:50',
            'fecha_ini'    => 'required|date',
            'fecha_fin'    => 'nullable|date|after_or_equal:fecha_ini',
            'estado'       => 'required|in:activo,inactivo',
        ]);

        Membresia::create([
            'id_cliente'   => $request->id_cliente,
            'tipo'         => $request->tipo,
            'fecha_ini'    => $request->fecha_ini,
            'fecha_fin'    => $request->fecha_fin,
            'estado'       => $request->estado,
        ]);

        return redirect()->route('membresias.index')->with('success', 'Membresía creada exitosamente');
    }

    public function edit($id)
    {
        $membresia = Membresia::findOrFail($id);
        $clientes = Cliente::all();
        return view('membresias.edit', compact('membresia', 'clientes'));
    }

    public function update(Request $request, $id)
    {
        $membresia = Membresia::findOrFail($id);

        $request->validate([
            'id_cliente'   => 'required|exists:clientes,id',
            'tipo'         => 'required|string|max:50',
            'fecha_ini'    => 'required|date',
            'fecha_fin'    => 'nullable|date|after_or_equal:fecha_ini',
            'estado'       => 'required|in:activo,inactivo',
        ]);

        $membresia->update([
            'id_cliente'   => $request->id_cliente,
            'tipo'         => $request->tipo,
            'fecha_ini'    => $request->fecha_ini,
            'fecha_fin'    => $request->fecha_fin,
            'estado'       => $request->estado,
        ]);

        return redirect()->route('membresias.index')->with('success', 'Membresía actualizada exitosamente');
    }

    public function destroy($id)
    {
        $membresia = Membresia::findOrFail($id);
        $membresia->delete();

        return redirect()->route('membresias.index')->with('success', 'Membresía eliminada correctamente');
    }
}
