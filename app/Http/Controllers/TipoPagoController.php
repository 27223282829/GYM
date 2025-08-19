<?php

namespace App\Http\Controllers;

use App\Models\TipoPago;
use Illuminate\Http\Request;

class TipoPagoController extends Controller
{

    public function index()
    {
        $tipos = TipoPago::all();
        return view('tipopagos.index', compact('tipos'));
    }

    // 👉 Mostrar formulario de creación
    public function create()
    {
        return view('tipopagos.create');
    }

    // 👉 Guardar nuevo registro
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tipo_de_pagos' => 'required|string|max:100',
        ]);

        TipoPago::create($validated);

        return redirect()->route('tipopagos.index')
            ->with('success', 'Tipo de pago creado correctamente.');
    }

    // 👉 Mostrar formulario de edición
    public function edit($id)
    {
        $tipoPago = TipoPago::findOrFail($id);
        return view('tipopagos.edit', compact('tipoPago'));
    }

    // 👉 Actualizar registro
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tipo_de_pagos' => 'required|string|max:100',
        ]);

        $tipoPago = TipoPago::findOrFail($id);
        $tipoPago->update($validated);

        return redirect()->route('tipopagos.index')
            ->with('success', 'Tipo de pago actualizado correctamente.');
    }

    // 👉 Eliminar registro
    public function destroy($id)
    {
        $tipoPago = TipoPago::findOrFail($id);
        $tipoPago->delete();

        return redirect()->route('tipopagos.index')
            ->with('success', 'Tipo de pago eliminado correctamente.');
    }
}
