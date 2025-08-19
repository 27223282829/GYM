<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pagos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Pagos</h2>
        <a href="{{ route('pagos.create') }}" class="btn btn-primary mb-3">Nuevo Pago</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Factura</th>
                    <th>Tipo de Pago</th>
                    <th>Fecha de Pago</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pagos as $pago)
                    <tr>
                        <td>{{ $pago->id }}</td>
                        <td>{{ $pago->cliente->nombre }}</td>
                        <td>{{ $pago->factura->id }}</td>
                        <td>{{ $pago->tipoPago->tipo_de_pagos }}</td>
                        <td>{{ $pago->fecha_pago }}</td>
                        <td>
                            <a href="{{ route('pagos.edit', $pago->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro de eliminar este pago?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
