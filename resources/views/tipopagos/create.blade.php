<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tipo de Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Crear Tipo de Pago</h2>

        <form action="{{ route('tipopagos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tipo_de_pagos" class="form-label">Tipo de Pago</label>
                <input type="text" name="tipo_de_pagos" id="tipo_de_pagos" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('tipopagos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
