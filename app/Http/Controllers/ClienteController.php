<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Trabajador;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::with('trabajador')->get();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        $trabajadores = Trabajador::all();
        return view('clientes.create', compact('trabajadores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'        => 'required|string|max:100',
            'apellido'      => 'required|string|max:100',
            'telefono'      => 'nullable|string|max:20',
            'correo'        => 'required|email|max:150|unique:clientes',
            'id_trabajador' => 'required|exists:trabajadors,id',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        $trabajadores = Trabajador::all();
        return view('clientes.edit', compact('cliente', 'trabajadores'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $request->validate([
            'nombre'        => 'required|string|max:100',
            'apellido'      => 'required|string|max:100',
            'telefono'      => 'nullable|string|max:20',
            'correo'        => 'required|email|max:150|unique:clientes,correo,' . $cliente->id,
            'id_trabajador' => 'required|exists:trabajadors,id',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente');
    }
}
