<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Factura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
    <h2>Editar Factura</h2>

    <form action="{{ route('facturas.update', $factura->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="id_trabajador" class="form-label">Trabajador</label>
            <select name="id_trabajador" id="id_trabajador" class="form-control" required>
                @foreach($trabajadores as $trabajador)
                    <option value="{{ $trabajador->id }}" {{ $factura->id_trabajador == $trabajador->id ? 'selected' : '' }}>
                        {{ $trabajador->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_cliente" class="form-label">Cliente</label>
            <select name="id_cliente" id="id_cliente" class="form-control" required>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $factura->id_cliente == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nombre }} {{ $cliente->apellido }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_membresia" class="form-label">Membresía</label>
            <select name="id_membresia" id="id_membresia" class="form-control" required>
                @foreach($membresias as $membresia)
                    <option value="{{ $membresia->id }}" {{ $factura->id_membresia == $membresia->id ? 'selected' : '' }}>
                        {{ $membresia->tipo }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="iva" class="form-label">IVA</label>
            <input type="number" step="0.01" name="iva" id="iva" class="form-control" value="{{ $factura->iva }}" required>
        </div>

        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="number" step="0.01" name="total" id="total" class="form-control" value="{{ $factura->total }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_fac" class="form-label">Fecha</label>
            <input type="date" name="fecha_fac" id="fecha_fac" class="form-control" value="{{ $factura->fecha_fac }}" required>
        </div>

        <a href="{{ route('facturas.index') }}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
</body>
</html>
