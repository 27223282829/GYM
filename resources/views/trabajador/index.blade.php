{{-- @extends('layouts.panel')

@section('content') --}}

<main>
    <div class="container py-4">
        <h2>Listado de trabajadores </h2>
        <a href="{{ url('trabajador/create') }}" class="btn btn-primary btn-sm">Nuevo registro</a>
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
                @foreach ($trabajador as $trabajadores)
                    <tr>
                        <td>{{ $trabajadores->id }}</td>
                        <td>{{ $trabajadores->nombre }}</td>
                        <td>{{ $trabajadores->apellido }}</td>
                        <td>{{ $trabajadores->telefono }}</td>
                        <td>{{ $trabajadores->correo }}</td>
                        <td>{{ $trabajadores->rol->Rol }}</td>
                        <td><a href="{{ url('trabajador/' . $trabajadores->id . '/edit') }}"
                                class="btn btn-warning btn-sn">Editar</a></td>
                        <td>
                            <form action="{{ url('trabajador/' . $trabajadores->id) }}" method="post">
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
