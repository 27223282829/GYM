<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Facturas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h2 class="mb-4">Listado de Facturas</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('facturas.create') }}" class="btn btn-success mb-3">Registrar nueva factura</a>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Trabajador</th>
                        <th>Cliente</th>
                        <th>Membresía</th>
                        <th>IVA</th>
                        <th>Total</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($facturas as $factura)
                        <tr>
                            <td>{{ $factura->id }}</td>
                            <td>{{ $factura->trabajador->nombre ?? '---' }}</td>
                            <td>{{ $factura->cliente->nombre ?? '---' }} {{ $factura->cliente->apellido ?? '' }}</td>
                            <td>{{ $factura->membresia->tipo ?? '---' }}</td>
                            <td>{{ $factura->iva }}</td>
                            <td>{{ $factura->total }}</td>
                            <td>{{ $factura->fecha_fac }}</td>
                            <td>
                                <a href="{{ route('facturas.edit', $factura->id) }}" class="btn btn-sm btn-primary">Editar</a>

                                <form action="{{ route('facturas.destroy', $factura->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('¿Seguro de eliminar esta factura?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">No hay facturas registradas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
