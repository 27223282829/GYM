<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Membresías</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h2 class="mb-4">Listado de Membresías</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('membresias.create') }}" class="btn btn-success mb-3">Registrar nueva membresía</a>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Tipo</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($membresias as $membresia)
                        <tr>
                            <td>{{ $membresia->id }}</td>
                            <td>
                                {{ $membresia->cliente->nombre ?? '---' }}
                                {{ $membresia->cliente->apellido ?? '' }}
                            </td>
                            <td>{{ $membresia->tipo }}</td>
                            <td>{{ $membresia->fecha_inicio }}</td>
                            <td>{{ $membresia->fecha_fin ?? '---' }}</td>
                            <td>{{ ucfirst($membresia->estado) }}</td>
                            <td>
                                <a href="{{ route('membresias.edit', $membresia->id) }}" class="btn btn-sm btn-primary">Editar</a>

                                <form action="{{ route('membresias.destroy', $membresia->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('¿Estás seguro de eliminar esta membresía?')">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
