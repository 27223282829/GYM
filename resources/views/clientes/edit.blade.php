<main>
    <div class="container py-4">
        <h2>Editar Trabajador</h2>

        <form action="{{ url('clientes/' . $cliente->id) }}" method="post">
            @method('PUT')
            @csrf

            <div class="md-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $cliente->nombre }}"
                        required>
                </div>
            </div>


            <div class="md-3 row">
                <label for="apellido" class="col-sm-2 col-form-label">Apellido:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="apellido" id="apellido"
                        value="{{ $cliente->apellido }}" required>
                </div>
            </div>
            <div class="md-3 row">
                <label for="telefono" class="col-sm-2 col-form-label">Apellido:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="telefono" id="telefono"
                        value="{{ $cliente->telefono }}" required>
                </div>
            </div>
            <div class="md-3 row">
                <label for="apellido" class="col-sm-2 col-form-label">Apellido:</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" name="correo" id="correo"
                        value="{{ $cliente->correo }}" required>
                </div>
            </div>


            <div class="md-3 row">
                <label for="id_trabajador" class="col-sm-2 col-form-label">Trabajador:</label>
                <div class="col-sm-5">
                    <select name="id_trabajador" id="id_trabajador" class="form-control" required>
                        <option value="">Seleccionar Trabajador</option>
                        @foreach ($trabajadores as $trabajador)
                            <option value="{{ $trabajador->id }}"
                                @if ($trabajador->id == $cliente->id_rol) {{ 'selected' }} @endif>
                                "{{ $trabajador->nombre }}"
                            </option>"
                        @endforeach
                    </select>

                </div>
            </div>

            <a href="{{ url('clientes') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
