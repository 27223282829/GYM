<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        //
        $admin= Admin::all();
        return view('admin.index', ['admin'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Nombre'=>'required|max:225',
            'Apellido'=>'required|max:225',
            'Telefono'=>'required|max:225',
            'Correo'=>'required|max:225',

        ]);
        
        $admin= new Admin();
        $admin->Nombre=$request->input('Nombre');
        $admin->Apellido=$request->input('Apellido');
        $admin->Telefono=$request->input('Telefono');
        $admin->Correo=$request->input('Correo');
        $admin->save();

        return view("admin.message", ['msg'=>'Registrado exitosamente']);
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
        $admin=Admin::find($id);
        return view('admin.edit', ['admin'=>$admin ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'Nombre'=>'required|max:225',
            'Apellido'=>'required|max:225',
            'Telefono'=>'required|max:225',
            'Correo'=>'required|max:225',

        ]);

        $admin= Admin::find($id);
        $admin->Nombre=$request->input("Nombre");
        $admin->Apellido=$request->input("Apellido");
        $admin->Telefono=$request->input("Telefono");
        $admin->Correo=$request->input("Correo");
        $admin->save();

        return view("admin.message", ['msg'=>'Registrado exitosamente su cambio']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Admin::destroy($id);
        return redirect('admin');
    }
}
