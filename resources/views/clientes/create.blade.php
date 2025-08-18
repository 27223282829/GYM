<div class="container py-4">
    <h2>Registrar Cliente</h2>

    <form action="{{ url('clientes') }}" method="post">
        @csrf

        <div class="md-3 row">
            <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}"
                    required>
            </div>
            <label for="Apellido" class="col-sm-2 col-form-label">Apellido:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido') }}"
                    required>
            </div>
            <label for="Telefono" class="col-sm-2 col-form-label">Telefono:</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}"
                    required>
            </div>
            <label for="Correo" class="col-sm-2 col-form-label">Correo:</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="correo" id="correo" value="{{ old('correo') }}"
                    required>
            </div>
        </div>
        <div class="md-3 row">
            <label for="id_trabajador" class="col-sm-2 col-form-label">Trabajador:</label>
            <div class="col-sm-5">
                <select name="id_trabajador" id="id_trabajador" class="form-control" required>
                    <option value= >Seleccionar Trabajador</option>
                    @foreach ($trabajadores as $trabajador)
                        <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }}</option>"
                    @endforeach
                </select>
            </div>
            <a href="{{ url('clientes') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>
