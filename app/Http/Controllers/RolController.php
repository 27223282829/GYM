<?php

namespace App\Http\Controllers;


use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class RolController extends Controller
{
    public function index()
    {

        $roles = Rol::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'rol' => 'required|string|max:100'
        ]);


        Rol::create($validated);


        return redirect()
            ->route('roles.index')
            ->with('success', 'Rol creado correctamente');
    }

    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return view('roles.show', compact('rol'));
    }

    public function edit($id)
    {

        $rol = Rol::findOrFail($id);
        return view('roles.edit', compact('rol'));


    }

    public function update(Request $request, $id)
    {

        try {
            $rol = Rol::findOrFail($id);

            $validated = $request->validate([
                'rol' => 'required|string|max:100'
                // 'correo'   => 'required|email|max:150|unique:admins,correo,' . $admin->id,
            ]);

            $rol->update($validated);

            return redirect()
                ->route('roles.index')
                ->with('success', 'Rol actualizado correctamente');

        } catch (ValidationException $e) {
            return back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (ModelNotFoundException $e) {
            return redirect()
                ->route('roles.index')
                ->with('error', 'Rol no encontrado');
        }
    }

    public function destroy($id)
    {
        try {
            $rol = Rol::findOrFail($id);
            $rol->delete();

            return redirect()
                ->route('roles.index')
                ->with('success', 'Rol eliminado correctamente');
        } catch (ModelNotFoundException $e) {
            return redirect()
                ->route('roles.index')
                ->with('error', 'Rol no encontrado');
        } catch (\Exception $e) {
            return redirect()
                ->route('roles.index')
                ->with('error', 'Error al eliminar el rol');
        }

    }
}
