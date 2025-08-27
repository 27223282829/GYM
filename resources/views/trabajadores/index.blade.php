
{{-- @extends('layouts.panel')

@section('content') --}}

<main>
    <div class="container py-4">
        <h2>Listado de trabajadores </h2>
        <a href="{{ url('trabajadores/create') }}" class="btn btn-primary btn-sm">Nuevo registro</a>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Accion</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trabajadores as $trabajador)
                    <tr>
                        <td>{{ $trabajador->id }}</td>
                        <td>{{ $trabajador->nombre }}</td>
                        <td>{{ $trabajador->apellido }}</td>
                        <td>{{ $trabajador->telefono }}</td>
                        <td>{{ $trabajador->correo }}</td>
                        <td>{{ $trabajador->rol->rol }}</td>
                        <td><a href="{{ url('trabajadores/' . $trabajador->id . '/edit') }}"
                                class="btn btn-warning btn-sn">Editar</a></td>
                        <td>
                            <form action="{{ url('trabajadores/' . $trabajador->id) }}" method="post">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit"
                                    onclick="return confirm('¿Esta usted seguro de querer borrar estos datos?')"
                                    class="btn btn-danger btn-sn">Eliminar</button>
                            </form>
                        </td>



                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</main>
{{-- @endsection --}}
