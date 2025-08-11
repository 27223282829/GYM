<div class="container py-4">
    <h2>Registrar Cliente</h2>

    <form action="{{ url('cliente') }}" method="post">
        @csrf

        <div class="md-3 row">
            <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ old('Nombre') }}"
                    required>
            </div>
            <label for="Apellido" class="col-sm-2 col-form-label">Apellido:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Apellido" id="Apellido" value="{{ old('Apellido') }}"
                    required>
            </div>
            <label for="Telefono" class="col-sm-2 col-form-label">Telefono:</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="Telefono" id="Telefono" value="{{ old('Telefono') }}"
                    required>
            </div>
            <label for="Correo" class="col-sm-2 col-form-label">Correo:</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="Correo" id="Correo" value="{{ old('Correo') }}"
                    required>
            </div>
        </div>
        <div class="md-3 row">
            <label for="id_trabajador" class="col-sm-2 col-form-label">Trabajador:</label>
            <div class="col-sm-5">
                <select name="id_trabajador" id="id_trabajador" class="form-control" required>
                    <option value="">Seleccionar Trabajador</option>
                    @foreach ($trabajador as $trabajadores)
                        <option value="{{ $trabajadores->id }}">{{ $trabajadores->nombre }}</option>"
                    @endforeach
                </select>
            </div>
            <a href="{{ url('cliente') }}" class="btn btn-secondary">Regresar</a>
            <button type="sumit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>
