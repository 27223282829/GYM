<div class="container py-4">
    <h2>Registrar Trabajador</h2>

    <form action="{{ url('trabajadores') }}" method="post">
        @csrf

        <div class="md-3 row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
            </div>

            <label for="apellido" class="col-sm-2 col-form-label">Apellido:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido') }}" required>
            </div>

            <label for="telefono" class="col-sm-2 col-form-label">Telefono:</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}" required>
            </div>

            <label for="correo" class="col-sm-2 col-form-label">Correo:</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="correo" id="correo" value="{{ old('correo') }}" required>
            </div>
        </div>

        <div class="md-3 row">
            <label for="id_rol" class="col-sm-2 col-form-label">Roles:</label>
            <div class="col-sm-5">
                <select name="id_rol" id="id_rol" class="form-control" required>
                    <option value="">Seleccionar rol</option>
                    @foreach ($roles as $rol)
                        <option value="{{ $rol->id }}">{{ $rol->rol }}</option>
                    @endforeach
                </select>
            </div>

            <a href="{{ url('trabajadores') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>
