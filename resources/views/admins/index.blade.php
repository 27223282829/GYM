<div class="container py-4">
    <h2>Lista de Administradores</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admins.create') }}" class="btn btn-primary mb-3">Registrar Admin</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->nombre }}</td>
                    <td>{{ $admin->apellido }}</td>
                    <td>{{ $admin->telefono }}</td>
                    <td>{{ $admin->correo }}</td>
                    <td>
                        <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este admin?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No hay administradores registrados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
