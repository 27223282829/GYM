<?php

namespace App\Http\Controllers;

use App\Models\TipoPago;
use Illuminate\Http\Request;

class TipoPagoController extends Controller
{
    public function index()
    {
        return response()->json(TipoPago::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo_de_pagos' => 'required|string|max:100',
        ]);

        $tipoPago = TipoPago::create($request->all());

        return response()->json($tipoPago, 201);
    }

    public function show($id)
    {
        $tipoPago = TipoPago::findOrFail($id);
        return response()->json($tipoPago, 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo_de_pagos' => 'required|string|max:100',
        ]);

        $tipoPago = TipoPago::findOrFail($id);
        $tipoPago->update($request->all());

        return response()->json($tipoPago, 200);
    }

    public function destroy($id)
    {
        $tipoPago = TipoPago::findOrFail($id);
        $tipoPago->delete();

        return response()->json(['message' => 'Tipo de pago eliminado correctamente'], 200);
    }
}
