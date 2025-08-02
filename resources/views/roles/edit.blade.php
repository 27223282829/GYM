{{-- @extends('layouts.panel')

@section('content') --}}

<main>
    <div class="container py-4">
        <h2>Editar Rol</h2>

        <form action="{{ url('roles/' . $rol->id) }}" method="post">
            @method('PUT')
            @csrf

            <div class="md-3 row">
                <label for="Rol" class="col-sm-2 col-form-label">Nombre del rol:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Rol" id="Rol" value="{{ $rol->Rol }}"
                        required>
                </div>
            </div>



            <a href="{{ url('roles') }}" class="btn btn-secondary">Regresar</a>
            <button type="sumit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
{{-- @endsection --}}
