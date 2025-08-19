<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Registrar Pago</h2>

        <form action="{{ route('pagos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="id_cliente" class="form-label">Cliente</label>
                <select name="id_cliente" class="form-control" required>
                    <option value="">-- Selecciona un Cliente --</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_factura" class="form-label">Factura</label>
                <select name="id_factura" class="form-control" required>
                    <option value="">-- Selecciona una Factura --</option>
                    @foreach($facturas as $factura)
                        <option value="{{ $factura->id }}">Factura #{{ $factura->id }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_tipo_pago" class="form-label">Tipo de Pago</label>
                <select name="id_tipo_pago" class="form-control" required>
                    <option value="">-- Selecciona un Tipo de Pago --</option>
                    @foreach($tiposPago as $tipo)
                        <option value="{{ $tipo->id }}">{{ $tipo->tipo_de_pagos }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="fecha_pago" class="form-label">Fecha de Pago</label>
                <input type="date" name="fecha_pago" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('pagos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
