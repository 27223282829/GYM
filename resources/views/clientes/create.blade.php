<div class="container py-4">
    <h2>Registrar Cliente</h2>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        {{-- Nombre --}}
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
        </div>

        {{-- Apellido --}}
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido') }}" required>
        </div>

        {{-- Teléfono --}}
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}">
        </div>

        {{-- Correo --}}
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" name="correo" id="correo" value="{{ old('correo') }}" required>
        </div>

        {{-- Trabajador asignado --}}
        <div class="mb-3">
            <label for="id_trabajador" class="form-label">Trabajador</label>
            <select name="id_trabajador" id="id_trabajador" class="form-control" required>
                <option value="">Seleccionar trabajador</option>
                @foreach ($trabajadores as $trabajador)
                    <option value="{{ $trabajador->id }}" {{ old('id_trabajador') == $trabajador->id ? 'selected' : '' }}>
                        {{ $trabajador->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Botones --}}
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
