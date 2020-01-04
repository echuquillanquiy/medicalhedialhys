@extends('layouts.panel')

@section('content')

<div class="card shadow">
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="mb-0">Tratamiento</h3>
      </div>
    </div>
  </div>
  <div class="card-body">
    @if (session('notification'))
      <div class="alert alert-success" role="alert">
        <span class="alert-icon"><i class="ni ni-curved-next"></i></span>
        {{ session('notification') }}
      </div>
    @endif
  </div>
  
  <div class="table-responsive">
    <!-- Projects table -->
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col">id</th>
          <th>Fecha de Creación</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($evolutions as $evolution)
        <tr>
          <th scope="row">
            {{$evolution->id}}
          </th>
          <td>
            {{$evolution->created_at}}
          </td>
          <td>
            
            <form action="{{ url('/evolutions/'.$evolution->id) }}" method="POST">
              @csrf
              @method('DELETE')

              <a href="{{ url('/evolutions/'.$evolution->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>

              <button class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que desea eliminar el tratamiento N° {{ $evolution->id }}?');" type="submit">Eliminar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="card-body">
    {{ $evolutions->appends($_GET)->links() }}
  </div>
</div>
@endsection
