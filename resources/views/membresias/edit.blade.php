<div class="container py-4">
    <h2>Editar Membresía</h2>

    <form action="{{ route('membresias.update', $membresia->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="id_cliente" class="form-label">Cliente</label>
            <select name="id_cliente" id="id_cliente" class="form-control" required>
                <option value="">Seleccionar cliente</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $cliente->id == $membresia->id_cliente ? 'selected' : '' }}>
                        {{ $cliente->nombre }} {{ $cliente->apellido }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="tipo" id="tipo" value="{{ $membresia->tipo }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{ $membresia->fecha_inicio }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_fin" class="form-label">Fecha Fin</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="{{ $membresia->fecha_fin }}">
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="activo" {{ $membresia->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="inactivo" {{ $membresia->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        <a href="{{ route('membresias.index') }}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
