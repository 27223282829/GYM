


    <div class="container py-4">
        <h2>Registrar Trabajador</h2>

        <form action="{{ url('trabajador') }}" method="post">
            @csrf

             <div class="md-3 row">
                  <label for="Nombre" class="col-sm-2 col-form-label">Nombre:</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control"  name="Nombre"  id="Nombre" value="{{old('Nombre')}}" required>
                  </div>
                  <label for="Apellido" class="col-sm-2 col-form-label">Apellido:</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control"  name="Apellido"  id="Apellido" value="{{old('Apellido')}}" required>
                  </div>
                  <label for="Telefono" class="col-sm-2 col-form-label">Telefono:</label>
                  <div class="col-sm-5">
                      <input type="number" class="form-control"  name="Telefono"  id="Telefono" value="{{old('Telefono')}}" required>
                  </div>
                  <label for="Correo" class="col-sm-2 col-form-label">Correo:</label>
                  <div class="col-sm-5">
                      <input type="email" class="form-control"  name="Correo"  id="Correo" value="{{old('Correo')}}" required>
                  </div>
              </div>
               <div class="md-3 row">
                <label for="id_rol" class="col-sm-2 col-form-label">Roles:</label>
                <div class="col-sm-5">
                    <select name="id_rol" id="id_rol" class="form-control" required>
                       <option value="">Seleccionar rol</option>
                       @foreach ($rol  as $roles )
                       <option value="{{$roles->id }}">{{$roles->Rol}}</option>"
                       @endforeach
                    </select>
                </div>
              <a href="{{ url('trabajador') }}"  class="btn btn-secondary">Regresar</a>
              <button type="sumit" class="btn btn-success">Guardar</button>
    </div>
    </form>
    </div>

