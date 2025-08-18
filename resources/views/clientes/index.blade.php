{{-- @extends('layouts.panel') --}}

{{-- @section('content') --}}

<main>
    <div class="container py-4">
        <h2>Listado de Clientes </h2>
        <a href="{{ url('clientes/create') }}" class="btn btn-primary btn-sm">Nuevo registro</a>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Trabajador</th>
                    <th>Accion</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>{{ $cliente->correo }}</td>
                        <td>{{ $cliente->trabajador->nombre }}</td>
                        <td><a href="{{ url('clientes/' . $cliente->id . '/edit') }}"
                                class="btn btn-warning btn-sn">Editar</a></td>
                        <td>
                            <form action="{{ url('clientes/' . $cliente->id) }}" method="post">
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
