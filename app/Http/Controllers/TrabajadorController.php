<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;
use App\Models\Roles;
class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $trabajador=Trabajador::all();
        return view('trabajador.index', ['trabajador'=>$trabajador]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('trabajador.create', ['rol'=>Roles::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre'=>'required|max:30',
            'apellido'=>'required|max:30',
            'telefono'=>'required|max:30',
            'correo'=>'required|max:30',
            'id_rol'=> 'required',
        ]);

        $trabajador=new Trabajador();
        $trabajador->Nombre=$request->input('nombre');
        $trabajador->Apellido=$request->input('apellido');
        $trabajador->Telefono=$request->input('telefono');
        $trabajador->Correo=$request->input('correo');
        $trabajador->id_rol = $request->input('id_rol');

        $trabajador->save();

        return view("trabajador.message", ['mg'=>"Guardado de forma correcta"]);
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
        $trabajador=Trabajador::find($id);
        return view('trabajador.edit', ['trabajador'=>$trabajador, 'roles'=>Roles::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nombre'=>'required|max:30',
            'apellido'=>'required|max:30',
            'telefono'=>'required|max:30',
            'correo'=>'required|max:30',
            'id_rol'=>'required',
        ]);

        $trabajador=Trabajador::find($id);
        $trabajador->Nombre=$request->input('nombre');
        $trabajador->Apellido=$request->input('apellido');
        $trabajador->Telefono=$request->input('telefono');
        $trabajador->Correo=$request->input('correo');
        $trabajador->id_rol=$request->input('id_rol');

        $trabajador->save();

        return view("trabajador.message", ['mg'=>"Guardado de forma correcta la nueva informacion"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Trabajador::destroy($id);
        return redirect('trabajador');
    }
}
