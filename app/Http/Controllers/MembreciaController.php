<?php

namespace App\Http\Controllers;


use App\Models\Membrecia;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MembreciaController extends Controller
{


    public function index()
    {
        $membrecias =Membrecia::all();
        return view('membrecia.index', compact('membrecias'));
    }


    public function create()
    {
        return view('membrecia.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required|max:225',
            'tipo'       => 'required|max:225',
            'fecha_ini'  => 'required|date',
            'fecha_fin'  => 'required|date|after_or_equal:Fecha_ini',
            'estado'     => 'required|max:225',
        ]);

        $membrecia = new Membrecia();
        $membrecia->Id_cliente = $request->Id_cliente;
        $membrecia->Tipo       = $request->Tipo;
        $membrecia->Fecha_ini  = $request->Fecha_ini;
        $membrecia->Fecha_fin  = $request->Fecha_fin;
        $membrecia->Estado     = $request->Estado;
        $membrecia->save();

        return redirect()->route('membrecia.index')->with('success', 'Membrecía registrada exitosamente');
    }


    public function show($id)
    {
        $membrecia = Membrecia::findOrFail($id);
        return view('membrecia.show', compact('membrecia'));
    }


    public function edit($id)
    {
        $membrecia = Membrecia::findOrFail($id);
        return view('membrecia.edit', compact('membrecia'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_cliente' => 'required|max:225',
            'tipo'       => 'required|max:225',
            'fecha_ini'  => 'required|date',
            'fecha_fin'  => 'required|date|after_or_equal:Fecha_ini',
            'estado'     => 'required|max:225',
        ]);

        $membrecia = Membrecia::findOrFail($id);
        $membrecia->Id_cliente = $request->Id_cliente;
        $membrecia->Tipo       = $request->Tipo;
        $membrecia->Fecha_ini  = $request->Fecha_ini;
        $membrecia->Fecha_fin  = $request->Fecha_fin;
        $membrecia->Estado     = $request->Estado;
        $membrecia->save();

        return redirect()->route('membrecia.index')->with('success', 'Membrecía actualizada correctamente');
    }

    public function destroy($id)
    {
        $membrecia = Membrecia::findOrFail($id);
        $membrecia->delete();

        return redirect()->route('membrecia.index')->with('success', 'Membresía eliminada correctamente');
    }

}
