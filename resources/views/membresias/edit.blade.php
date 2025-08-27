<div class="container py-4">
    <h2>Editar Membresía</h2>

    <form action="{{ route('membresias.update', $membresia->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Cliente --}}
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

        {{-- Tipo --}}
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="tipo" id="tipo" value="{{ old('tipo', $membresia->tipo) }}" required>
        </div>

        {{-- Fecha inicio --}}
        <div class="mb-3">
            <label for="fecha_ini" class="form-label">Fecha Inicio</label>
            <input type="date" class="form-control" name="fecha_ini" id="fecha_ini" value="{{ old('fecha_ini', $membresia->fecha_ini) }}" required>
        </div>

        {{-- Fecha fin --}}
        <div class="mb-3">
            <label for="fecha_fin" class="form-label">Fecha Fin</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="{{ old('fecha_fin', $membresia->fecha_fin) }}">
        </div>

        {{-- Estado --}}
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="activo" {{ old('estado', $membresia->estado) == 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="inactivo" {{ old('estado', $membresia->estado) == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        {{-- Botones --}}
        <a href="{{ route('membresias.index') }}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
