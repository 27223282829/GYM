<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::with(['trabajador', 'cliente', 'membresia'])->get();
        return response()->json($facturas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_trabajador' => 'required|exists:trabajadores,id',
            'id_cliente' => 'required|exists:clientes,id',
            'id_membresia' => 'required|exists:membresias,id',
            'iva' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
            'fecha_fac' => 'required|date',
        ]);

        $factura = Factura::create($request->all());

        return response()->json([
            'message' => 'Factura creada correctamente',
            'data' => $factura
        ]);
    }

    public function show($id)
    {
        $factura = Factura::with(['trabajador', 'cliente', 'membresia'])->findOrFail($id);
        return response()->json($factura);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_trabajador' => 'required|exists:trabajadores,id',
            'id_cliente' => 'required|exists:clientes,id',
            'id_membresia' => 'required|exists:membresias,id',
            'iva' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
            'fecha_fac' => 'required|date',
        ]);

        $factura = Factura::findOrFail($id);
        $factura->update($request->all());

        return response()->json([
            'message' => 'Factura actualizada correctamente',
            'data' => $factura
        ]);
    }

    public function destroy($id)
    {
        $factura = Factura::findOrFail($id);
        $factura->delete();

        return response()->json(['message' => 'Factura eliminada correctamente']);
    }
}
