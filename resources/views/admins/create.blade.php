<div class="container py-4">
    <h2>Registrar Admin</h2>

    <form action="{{ url('admins') }}" method="POST">
        @csrf

        <div class="mb-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="apellido" class="col-sm-2 col-form-label">Apellido:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido') }}" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="correo" class="col-sm-2 col-form-label">Correo:</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="correo" id="correo" value="{{ old('correo') }}" required>
            </div>
        </div>

        <a href="{{ url('admins') }}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
