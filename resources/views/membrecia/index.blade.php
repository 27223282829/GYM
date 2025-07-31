@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Listado de Membresías</h2>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <a href="{{ route('membrecia.create') }}" class="btn btn-success mb-3">Registrar nueva membresía</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>ID Cliente</th>
                    <th>Tipo</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($membrecias as $membrecia)
                    <tr>
                        <td>{{ $membrecia->id }}</td>
                        <td>{{ $membrecia->id_cliente }}</td>
                        <td>{{ $membrecia->tipo }}</td>
                        <td>{{ $membrecia->fecha_ini }}</td>
                        <td>{{ $membrecia->fecha_fin }}</td>
                        <td>{{ $membrecia->estado }}</td>
                        <td>
                            <a href="{{ route('membrecia.edit', $membrecia->id) }}" class="btn btn-sm btn-primary">Editar</a>

                            <form action="{{ route('membrecia.destroy', $membrecia->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('¿Estás seguro de eliminar esta membresía?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No hay membresías registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
