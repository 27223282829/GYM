{{-- @extends('layouts.panel')

@section('content') --}}

<main>
    <div class="container py-4">
        <h2>Editar Admin</h2>

        <form action="{{ url('admins/' . $admin->id) }}" method="post">
            @method('PUT')
            @csrf

            <div class="md-3 row">
                <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $admin->nombre }}"
                        required>
                </div>
            </div>


            <div class="md-3 row">
                <label for="Apellido" class="col-sm-2 col-form-label">Apellido:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="apellido" id="apellido"
                        value="{{ $admin->apellido }}" required>
                </div>
            </div>
            <div class="md-3 row">
                <label for="Telefono" class="col-sm-2 col-form-label">Telefono:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="telefono" id="telefono"
                        value="{{ $admin->telefono }}" required>
                </div>
            </div>
            <div class="md-3 row">
                <label for="Correo" class="col-sm-2 col-form-label">Correo:</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" name="correo" id="correo"
                        value="{{ $admin->correo }}" required>
                </div>
            </div>



            <a href="{{ url('admins') }}" class="btn btn-secondary">Regresar</a>
            <button type="sumit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
{{-- @endsection --}}
