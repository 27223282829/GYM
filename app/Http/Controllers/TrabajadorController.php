<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class TrabajadorController extends Controller
{
    public function index()
    {
        $trabajadores = Trabajador::with('rol')->get();
        return view('trabajadores.index', compact('trabajadores'));
    }

    public function create()
    {
        $roles = Rol::all(); // Para mostrar los roles en un select
        return view('trabajadores.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'   => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'correo'   => 'required|email|unique:trabajadors',
            'id_rol'   => 'required|exists:roles,id',
        ]);

        Trabajador::create($request->all());

        return redirect()
            ->route('trabajadores.index')
            ->with('success', 'Trabajador creado correctamente');
    }

    public function show($id)
    {
        // si necesitas una vista detalle
        $trabajador = Trabajador::with('rol')->findOrFail($id);
        return view('trabajadores.show', compact('trabajador'));
    }

    public function edit($id)
    {
        $trabajador = Trabajador::findOrFail($id);
        $roles = Rol::all(); // para mostrar en el select de edición
        return view('trabajadores.edit', compact('trabajador', 'roles'));
    }

    public function update(Request $request, $id)
    {
        try {
            $trabajador = Trabajador::findOrFail($id);

            $request->validate([
                'nombre'   => 'required|string|max:255',
                'apellido' => 'required|string|max:255',
                'telefono' => 'required|string|max:20',
                'correo'   => 'required|email|unique:trabajadors,correo,' . $id,
                'id_rol'   => 'required|exists:roles,id',
            ]);

            $trabajador->update($request->all());

            return redirect()
                ->route('trabajadores.index')
                ->with('success', 'Trabajador actualizado correctamente');
        } catch (ValidationException $e) {
            return redirect()
                ->back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (ModelNotFoundException $e) {
            return redirect()
                ->route('trabajadores.index')
                ->with('error', 'Trabajador no encontrado');
        } catch (\Exception $e) {
            return redirect()
                ->route('trabajadores.index')
                ->with('error', 'Error al actualizar el trabajador');
        }
    }

    public function destroy($id)
    {
        try {
            $trabajador = Trabajador::findOrFail($id);
            $trabajador->delete();

            return redirect()
                ->route('trabajadores.index')
                ->with('success', 'Trabajador eliminado correctamente');
        } catch (ModelNotFoundException $e) {
            return redirect()
                ->route('trabajadores.index')
                ->with('error', 'Trabajador no encontrado');
        } catch (\Exception $e) {
            return redirect()
                ->route('trabajadores.index')
                ->with('error', 'Error al eliminar el trabajador');
        }
    }
}
