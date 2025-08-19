<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Cliente;
use App\Models\Factura;
use App\Models\TipoPago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::with(['cliente', 'factura', 'tipoPago'])->get();
        return view('pagos.index', compact('pagos'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $facturas = Factura::all();
        $tiposPago = TipoPago::all();

        return view('pagos.create', compact('clientes', 'facturas', 'tiposPago'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_cliente'   => 'required|exists:clientes,id',
            'id_factura'   => 'required|exists:facturas,id',
            'id_tipo_pago' => 'required|exists:tipo_pagos,id',
            'fecha_pago'   => 'required|date',
        ]);

        Pago::create($request->only(['id_cliente', 'id_factura', 'id_tipo_pago', 'fecha_pago']));

        return redirect()->route('pagos.index')->with('success', 'Pago creado exitosamente.');
    }

    public function show($id)
    {
        $pago = Pago::with(['cliente', 'factura', 'tipoPago'])->findOrFail($id);
        return view('pagos.show', compact('pago'));
    }

    public function edit($id)
    {
        $pago = Pago::findOrFail($id);
        $clientes = Cliente::all();
        $facturas = Factura::all();
        $tiposPago = TipoPago::all();

        // 🔹 Ahora compact correcto
        return view('pagos.edit', compact('pago', 'clientes', 'facturas', 'tiposPago'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_cliente'   => 'required|exists:clientes,id',
            'id_factura'   => 'required|exists:facturas,id',
            'id_tipo_pago' => 'required|exists:tipo_pagos,id',
            'fecha_pago'   => 'required|date',
        ]);

        $pago = Pago::findOrFail($id);

        // 🔹 Actualizamos solo los campos permitidos
        $pago->update($request->only(['id_cliente', 'id_factura', 'id_tipo_pago', 'fecha_pago']));

        return redirect()->route('pagos.index')->with('success', 'Pago actualizado exitosamente.');
    }

    public function destroy($id)
    {
        Pago::destroy($id);
        return redirect()->route('pagos.index')->with('success', 'Pago eliminado correctamente.');
    }
}
