<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\trabajador;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cliente=Cliente::all();
        return view('clientes.index', ['cliente'=>$cliente]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clientes.create', ['trabajador'=>Trabajador::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Nombre'=>'required|max:30',
            'Apellido'=>'required|max:30',
            'Telefono'=>'required|max:30',
            'Correo'=>'required|max:30',
            'id_trabajador'=>'required',
        ]);

        $cliente=new Cliente();
        $cliente->Nombre=$request->input('Nombre');
        $cliente->Apellido=$request->input('Apellido');
        $cliente->Telefono=$request->input('Telefono');
        $cliente->Correo=$request->input('Correo');
        $cliente->id_trabajador=$request->input('id_trabajador');

        $cliente->save();

        return view("clientes.message", ['msg'=>"Agregado de forma completa"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cliente=Cliente::find($id);
        return view('clientes.edit', ['cliente'=>$cliente, 'trabajador'=>Trabajador::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'Nombre'=>'required|max:30',
            'Apellido'=>'required|max:30',
            'Telefono'=>'required|max:30',
            'Correo'=>'required|max:30',
            'id_trabajador'=>'required',
        ]);

        $cliente= Cliente::find($id);
        $cliente->Nombre=$request->input('Nombre');
        $cliente->Apellido=$request->input('Apellido');
        $cliente->Telefono=$request->input('Telefono');
        $cliente->Correo=$request->input('Correo');
        $cliente->id_trabajador=$request->input('id_trabajador');
        $cliente->save();

        return view("clientes.message", ['msg'=>"Agregado de forma completa la edicion"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Cliente::destroy($id);
        return redirect('cliente');
    }
}
