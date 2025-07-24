


    <div class="container py-4">
        <h2>Registrar Rol</h2>

        <form action="{{ url('rol') }}" method="post">
            @csrf

             <div class="md-3 row">
                  <label for="Rol" class="col-sm-2 col-form-label">Nombre del rol:</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control"  name="Rol"  id="Rol" value="{{old('Rol')}}" required>
                  </div>
              </div>
              <a href="{{ url('rol') }}"  class="btn btn-secondary">Regresar</a>
              <button type="sumit" class="btn btn-success">Guardar</button>
    </div>
    </form>
    </div>




