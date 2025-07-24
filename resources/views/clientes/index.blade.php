{{-- @extends('layouts.panel') --}}

{{-- @section('content') --}}

<main>
     <div class="container py-4">
       <h2>Listado de Clientes </h2>
       <a href="{{url('cliente/create')}}" class="btn btn-primary btn-sm">Nuevo registro</a>
       <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Trabajador</th>
                <th>Accion</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cliente as $clientes)
            <tr>
                <td>{{ $clientes->id}}</td>
                <td>{{ $clientes->Nombre}}</td>
                <td>{{ $clientes->Apellido}}</td>
                <td>{{ $clientes->Telefono}}</td>
                <td>{{ $clientes->Correo}}</td>
                <td>{{ $clientes->trabajador->Nombre}}</td>
                <td><a href="{{url('cliente/'.$clientes->id.'/edit')}}" class="btn btn-warning btn-sn">Editar</a></td>
                <td><form action="{{ url('cliente/'.$clientes->id)}}" method="post">
                    {{ method_field("DELETE") }}
                    @csrf
                    <button type="submit" onclick="return confirm('¿Esta usted seguro de querer borrar estos datos?')"
                    class="btn btn-danger btn-sn">Eliminar</button>
                    </form>
                </td>



            </tr>
            @endforeach
        </tbody>
    </table>
     </div>


</main>
{{-- @endsection --}}
