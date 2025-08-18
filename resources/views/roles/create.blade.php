<div class="container py-4">
    <h2>Registrar Rol</h2>

    <form action="{{ url('roles') }}" method="post">
        @csrf

        <div class="md-3 row">
            <label for="Rol" class="col-sm-2 col-form-label">Nombre del rol:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="rol" id="rol" value="{{ old('rol') }}" required>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Regresar</a>



            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>
