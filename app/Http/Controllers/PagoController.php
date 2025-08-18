<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::with(['cliente', 'factura', 'tipoPago'])->get();
        return response()->json($pagos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required|exists:clientes,id',
            'id_factura' => 'required|exists:facturas,id',
            'id_tipo_pago' => 'required|exists:tipos_pago,id',
            'fecha_pago' => 'required|date',
        ]);

        $pago = Pago::create($request->all());
        return response()->json($pago, 201);
    }

    public function show($id)
    {
        $pago = Pago::with(['cliente', 'factura', 'tipoPago'])->findOrFail($id);
        return response()->json($pago);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_cliente' => 'required|exists:clientes,id',
            'id_factura' => 'required|exists:facturas,id',
            'id_tipo_pago' => 'required|exists:tipos_pago,id',
            'fecha_pago' => 'required|date',
        ]);

        $pago = Pago::findOrFail($id);
        $pago->update($request->all());
        return response()->json($pago);
    }

    public function destroy($id)
    {
        Pago::destroy($id);
        return response()->json(null, 204);
    }
}
