{{-- @extends('layouts.panel')

@section('content') --}}

<main>
    <div class="container py-4">
        <h2>Editar Admin</h2>

        <form action="{{ url('admin/'.$admin->id) }}" method="post">
            @method("PUT")
            @csrf

               <div class="md-3 row">
                  <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>
                  <div class="col-sm-5">
                       <input type="text" class="form-control"  name="Nombre"  id="Nombre" value="{{$admin->Nombre}}" required>
                    </div>
                </div>


                <div class="md-3 row">
                    <label for="Apellido" class="col-sm-2 col-form-label">Apellido:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"  name="Apellido"  id="Apellido" value="{{ $admin->Apellido }}" required>
                    </div>
                </div>
                <div class="md-3 row">
                    <label for="Telefono" class="col-sm-2 col-form-label">Telefono:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"  name="Telefono"  id="Telefono" value="{{ $admin->Telefono }}" required>
                    </div>
                </div>
                <div class="md-3 row">
                    <label for="Correo" class="col-sm-2 col-form-label">Correo:</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control"  name="Correo"  id="Correo" value="{{ $admin->Correo }}" required>
                    </div>
                </div>



                <a href="{{ url('admin') }}"  class="btn btn-secondary">Regresar</a>
                <button type="sumit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>
{{-- @endsection --}}
