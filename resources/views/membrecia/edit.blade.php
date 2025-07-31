@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Editar Membresía</h2>

    <form action="{{ route('membrecia.update', $membresia->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="md-3 row">
            <label class="col-sm-2 col-form-label">ID Cliente:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="id_cliente" value="{{ old('id_cliente', $membresia->id_cliente) }}" required>
            </div>

            <label class="col-sm-2 col-form-label">Tipo:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tipo" value="{{ old('tipo', $membresia->tipo) }}" required>
            </div>

            <label class="col-sm-2 col-form-label">Fecha inicio:</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="fecha_ini" value="{{ old('fecha_ini', $membresia->fecha_ini) }}" required>
            </div>

            <label class="col-sm-2 col-form-label">Fecha fin:</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="fecha_fin" value="{{ old('fecha_fin', $membresia->fecha_fin) }}" required>
            </div>

            <label class="col-sm-2 col-form-label">Estado:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="estado" value="{{ old('estado', $membresia->estado) }}" required>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('membrecia.index') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
</div>
@endsection
