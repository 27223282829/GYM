<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\roles;
use Illuminate\Http\Request;


class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rol= Roles::all();
        return view('roles.index', ['rol'=>$rol]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Rol'=>'required|max:225',
        ]);

        $rol= new Roles();
        $rol->Rol=$request->input('Rol');
        $rol->save();

        return view("roles.message", ['mg'=>'Registrado perfectamente']);
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
        $rol=Roles::find($id);
        return view('roles.edit', ['rol'=>$rol]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'Rol'=>'required|max:225',
        ]);

        $rol= Roles::find($id);
        $rol->Roles=$request->input('Rol');
        $rol->save();

        return view("roles.message", ['mg'=>'Registrado perfectamente su cambio']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Roles::destroy($id);
        return redirect('roles')->with('message', 'Eliminado correctamente');
    }
}
