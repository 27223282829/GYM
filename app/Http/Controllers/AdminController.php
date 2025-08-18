<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Exception;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admins.create'); // Muestra el formulario

    }


    public function store(Request $request)
    {
        // Validar datos si es necesario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'correo' => 'required|email|max:255',
        ]);

        // Guardar en la base de datos
        Admin::create($request->all());

        // Redirigir al index con todos los datos
        return redirect()->route('admins.index');
    }


    public function show($id)
    {
        try {
            $admin = Admin::findOrFail($id);
            return response()->json($admin, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Administrador no encontrado'], 404);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error al obtener el administrador'], 500);
        }
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        try {
            $admin = Admin::findOrFail($id);

            $validated = $request->validate([
                'nombre'   => 'required|string|max:100',
                'apellido' => 'required|string|max:100',
                'telefono' => 'required|string|max:20',
                'correo'   => 'required|email|max:150|unique:admins,correo,' . $admin->id,
            ]);

            $admin->update($validated);

            return redirect()
                ->route('admins.index') // 👈 asegúrate que la ruta esté bien nombrada
                ->with('success', 'Administrador actualizado correctamente');
        } catch (ValidationException $e) {
            return redirect()
                ->back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (ModelNotFoundException $e) {
            return redirect()
                ->route('admins.index')
                ->with('error', 'Administrador no encontrado');
        } catch (\Exception $e) {
            return redirect()
                ->route('admins.index')
                ->with('error', 'Error al actualizar el administrador');
        }
    }


    public function destroy($id)
    {
        try {
            $admin = Admin::findOrFail($id);
            $admin->delete();

            return redirect()
                ->route('admins.index') // 👈 asegúrate de que esta ruta exista en tu web.php
                ->with('success', 'Administrador eliminado correctamente');
        } catch (ModelNotFoundException $e) {
            return redirect()
                ->route('admin.index')
                ->with('error', 'Administrador no encontrado');
        } catch (\Exception $e) {
            return redirect()
                ->route('admin.index')
                ->with('error', 'Error al eliminar el administrador');
        }
    }
}
