<div class="container py-4">
    <h2>Listado de Roles</h2>
    <a href="{{ url('roles/create') }}" class="btn btn-primary btn-sm">Nuevo registro</a>

    <table class="table table-light mt-3">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
                <tr>
                    <td>{{ $rol->id }}</td>
                    <td>{{ $rol->rol }}</td>
                    <td>
                        <a href="{{ url('roles/' . $rol->id . '/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ url('roles/' . $rol->id) }}" method="POST" style="display:inline-block;">
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                                onclick="return confirm('¿Está usted seguro de querer borrar este rol?')"
                                class="btn btn-danger btn-sm">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
