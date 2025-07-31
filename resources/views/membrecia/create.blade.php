<div class="container py-4">
    <h2>Registrar Membresía</h2>

    <form action="{{ url('membrecia') }}" method="post">
        @csrf

        <div class="mb-3 row">
            <label for="id_cliente" class="col-sm-2 col-form-label">ID Cliente:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="id_cliente" id="id_cliente"
                    value="{{ old('id_cliente') }}" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="Tipo" class="col-sm-2 col-form-label">Tipo:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Tipo" id="Tipo"
                    value="{{ old('Tipo') }}" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="Fecha_ini" class="col-sm-2 col-form-label">Fecha Inicio:</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="Fecha_ini" id="Fecha_ini"
                    value="{{ old('Fecha_ini') }}" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="Fecha_fin" class="col-sm-2 col-form-label">Fecha Fin:</label>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="Fecha_fin" id="Fecha_fin"
                    value="{{ old('Fecha_fin') }}" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="Estado" class="col-sm-2 col-form-label">Estado:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Estado" id="Estado"
                    value="{{ old('Estado') }}" required>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ url('trabajadores') }}" class="btn btn-secondary me-2">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>
