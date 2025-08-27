<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use App\Models\Cliente;
use App\Models\Membresia;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::with(['trabajador', 'cliente', 'membresia'])->get();
        return view('facturas.index', compact('facturas'));
    }

    public function create()
    {
        $trabajadores = Trabajador::all();
        $clientes = Cliente::all();
        $membresias = Membresia::all();

        return view('facturas.create', compact('trabajadores', 'clientes', 'membresias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_trabajador' => 'required|exists:trabajadors,id',
            'id_cliente'    => 'required|exists:clientes,id',
            'id_membresia'  => 'required|exists:membresias,id',
            'iva'           => 'required|numeric|min:0',
            'total'         => 'required|numeric|min:0',
            'fecha_fac'     => 'required|date',
        ]);

        Factura::create($request->all());

        return redirect()->route('facturas.index')->with('success', 'Factura creada correctamente');
    }

    public function edit($id)
    {
        $factura = Factura::findOrFail($id);
        $trabajadores = Trabajador::all();
        $clientes = Cliente::all();
        $membresias = Membresia::all();

        return view('facturas.edit', compact('factura', 'trabajadores', 'clientes', 'membresias'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_trabajador' => 'required|exists:trabajadors,id',
            'id_cliente'    => 'required|exists:clientes,id',
            'id_membresia'  => 'required|exists:membresias,id',
            'iva'           => 'required|numeric|min:0',
            'total'         => 'required|numeric|min:0',
            'fecha_fac'     => 'required|date',
        ]);

        $factura = Factura::findOrFail($id);
        $factura->update($request->all());

        return redirect()->route('facturas.index')->with('success', 'Factura actualizada correctamente');
    }

    public function destroy($id)
    {
        $factura = Factura::findOrFail($id);
        $factura->delete();

        return redirect()->route('facturas.index')->with('success', 'Factura eliminada correctamente');
    }
}
