
<main>
    <div class="container py-4">
        <h2>Editar Trabajador</h2>

        <form action="{{ url('trabajador/'.$trabajador->id) }}" method="post">
            @method("PUT")
            @csrf

               <div class="md-3 row">
                  <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                  <div class="col-sm-5">
                       <input type="text" class="form-control"  name="Nombre"  id="Nombre" value="{{$trabajador->Nombre}}" required>
                    </div>
                </div>


                <div class="md-3 row">
                    <label for="apellido" class="col-sm-2 col-form-label">Apellido:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"  name="Apellido"  id="Apellido" value="{{ $trabajador->Apellido }}" required>
                    </div>
                </div>
                <div class="md-3 row">
                    <label for="telefono" class="col-sm-2 col-form-label">Apellido:</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control"  name="Telefono"  id="Telefono" value="{{ $trabajador->Telefono }}" required>
                    </div>
                </div>
                <div class="md-3 row">
                    <label for="apellido" class="col-sm-2 col-form-label">Apellido:</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control"  name="Correo"  id="Correo" value="{{ $trabajador->Correo }}" required>
                    </div>
                </div>


                <div class="md-3 row">
                    <label for="id_rol" class="col-sm-2 col-form-label">Programa:</label>
                    <div class="col-sm-5">
                        <select name="id_rol" id="id_rol" class="form-control" required>
                            <option value="">Seleccionar rol</option>
                                @foreach ($rol as $roles )
                                    <option value="{{$roles->id}}"  @if ($roles->id == $trabajador->id_rol) {{ 'selected' }}@endif>
                                        "{{$roles->Rol }}"
                                    </option>"
                                @endforeach
                        </select>

                    </div>
                </div>

                <a href="{{ url('trabajador') }}"  class="btn btn-secondary">Regresar</a>
                <button type="sumit" class="btn btn-success">Guardar</button>

        </form>

    </div>
</main>

