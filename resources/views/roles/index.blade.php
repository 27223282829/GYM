{{-- @extends('layouts.panel')

@section('content') --}}

<main>
    <div class="container py-4">
        <h2>Listado de Roles </h2>
        <a href="{{ url('roles/create') }}" class="btn btn-primary btn-sm">Nuevo registro</a>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rol as $rols)
                    <tr>
                        <td>{{ $rols->id }}</td>
                        <td>{{ $rols->Rol }}</td>
                        <td><a href="{{ url('roles/' . $rols->id . '/edit') }}" class="btn btn-warning btn-sn">Editar</a></td>
                        <td>
                            <form action="{{ url('roles/' . $rols->id) }}" method="post">
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
