@extends('layouts.panel')

@section('content')

<div class="card shadow">
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col-2">
        <h3 class="mb-0">Ordenes de Atención</h3>
      </div>

      <div class="col text-right">
        <a href="{{ url('orders/create') }}" class="btn btn-sm btn-success">
          Nueva orden
        </a>
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
          <th scope="col">ID</th>
          <th scope="col">Paciente</th>
          <th scope="col">Sala</th>
          <th scope="col">Turno</th>
          <th scope="col">Fecha y hora de creación</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $order)
        <tr>
          <th scope="row">
            {{$order->id}}
          </th>
          <td>
            {{$order->patient->name}}
          </td>
          <td>
            {{$order->room->name}}
          </td>
          <td>
            {{$order->shift->name}}
          </td>

          <td>
            {{$order->created_at}}
          </td>
          <td>

            <form action="{{ url('/orders/'.$order->id) }}" method="POST">
              @csrf
              @method('DELETE')

              <a href="{{ url('/orders/'.$order->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>

              <button class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que desea eliminar la orden del paciente {{ $order->patient->name }}?, ya que al borrarlo eliminara los registros que tenga del día {{ $order->created_at }}');" type="submit">Eliminar</button>

              <a href="{{ url('/orders/'.$order->id.'/impresion') }}" class="btn btn-sm btn-info" target="_blank">Impresión</a>
            </form>           

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="card-body">
    {{ $orders->links() }}
  </div>
</div>

@endsection

@section('scripts')
<script src="{{ asset('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
@endsection