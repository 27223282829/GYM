


    <div class="container py-4">
        <h2>Registrar Admin</h2>

        <form action="{{ url('admin') }}" method="post">
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
              <a href="{{ url('admin') }}"  class="btn btn-secondary">Regresar</a>
              <button type="sumit" class="btn btn-success">Guardar</button>
    </div>
    </form>
    </div>

