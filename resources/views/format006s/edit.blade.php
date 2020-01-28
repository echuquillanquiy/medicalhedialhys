@extends('layouts.panel')

@section('content')

<div class="card shadow">
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="mb-0">Seguimiento Paciente: <strong class="ml-3">{{ $format006->tracing->patient->name }}, {{ $format006->tracing->patient->age }} años</strong></h3>
      </div>
      <div class="col text-right">
        <a href="{{ url('format006s/') }}" class="btn btn-sm btn-default">
          Cancelar y volver
        </a>
      </div>
    </div>
  </div>
  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    
                
    <form action="{{ url('format006s/'.$format006->id) }}" method="POST" class="mt--4">
      @csrf
      @method('PUT')
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

      <h4>DATOS DE FILIACION: <strong class="ml-3">SALA: "  {{ $format006->tracing->room->name }}"</strong> <strong class="ml-1">/ {{ $format006->tracing->shift->name }} / HOSPITAL DE REFERENCIA: {{ $format006->tracing->patient->hosp_origin }}</strong></h4>
      <hr class="mt--1">
      <div class="row text-center mt--3">

        <div class="form-group col-sm-12 col-lg-4"> 
        <input type="text" id="unit_dial" name="unit_dial" class="form-control" placeholder="UNIDAD DE DIALISIS" value="{{ $format006->unit_dial }}">
        </div>

        <div class="form-group col-sm-12 col-lg-4">
              <input type="text" id="nefro_treat" name="nefro_treat" class="form-control" placeholder="NEFROLOGO TRATANTE" value="{{ $format006->nefro_treat }}">
        </div>

        <div class="form-group col-sm-12 col-lg-4">
              <input type="text" id="consult_frec" name="consult_frec" class="form-control" placeholder="FRECUENCIA DE CONSULTA" value="{{ $format006->consult_frec }}">
        </div>

        <div class="form-group col-sm-12 col-lg-6">
              <input type="text" id="frec" name="frec" class="form-control" value="3 VECES POR SEMANA" value="{{ $format006->frec }}">
        </div>

        <div class="form-group col-sm-12 col-lg-6">
              <input type="text" id="attorney" name="attorney" class="form-control" placeholder="APODERADO" value="{{ $format006->attorney }}">
        </div>
      </div>

      <h4>ANTECEDENTES CLINICOS</h4>
      <hr class="mt--1">

      <div class="row mt--4">
        <div class="form-group col-sm-12 col-lg-12"> 
          <input type="text" id="cause_erca" name="cause_erca" class="form-control" placeholder="CAUSA DE LA ERCA" value="{{ $format006->cause_erca }}">
        </div>

        <div class="form-group col-sm-12 col-lg-2 ml-5 mr--7"> 
          <span>PREDIALISIS</span>
        </div>

        <div class="form-group col-sm-12 col-lg-5"> 
          <input type="text" id="time_predial" name="time_predial" class="form-control" placeholder="TIEMPO" value="{{ $format006->time_predial }}">
        </div>

        <div class="form-group col-sm-12 col-lg-5"> 
          <input type="text" id="access_vsc" name="access_vsc" class="form-control" placeholder="TPO DE ACCESO VSC." value="{{ $format006->access_vsc }}">
        </div>

        <div class="form-group col-sm-12 col-lg-2 ml-0 mr--4"> 
          <span>PRIMERA DIALISIS</span>
        </div>
        
        <div class="form-group col-lg-2">
          <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
            </div>
            <input class="form-control datepicker" 
                id="date_predl" name="date_predl" type="text" 
                value="{{ old('date_predl', $format006->date_predl )}}"
                data-date-format="yyyy-mm-dd" 
                >
          </div>
        </div>

        <div class="form-group col-sm-12 col-lg-1"> 
          <input type="text" id="dp_predl" name="dp_predl" class="form-control" placeholder="DP" value="{{ $format006->dp_predl }}">
        </div>

        <div class="form-group col-sm-12 col-lg-2"> 
          <input type="text" id="hemod_dl" name="hemod_dl" class="form-control" placeholder="HEMOD" value="{{ $format006->hemod_dl }}">
        </div>

        <div class="form-group col-sm-12 col-lg-2"> 
          <input type="text" id="acc_vasc_dl" name="acc_vasc_dl" class="form-control" placeholder="ACCESO VASC" value="{{ $format006->acc_vasc_dl }}">
        </div>

        <div class="form-group col-sm-12 col-lg-3"> 
          <input type="text" id="establishment" name="establishment" class="form-control" placeholder="ESTABLECIMIENTO DE SALUD" value="{{ $format006->establishment }}">
        </div>
      </div>

      <h4>ACCESO VASCULAR</h4>
      <hr class="mt--1">

      <div class="row mt--4 text-center ml-9">

        <div class="table-reponsive">
          <table class="table align-items-center">
            <thead class="thead-light">
              <tr>
                <th>CVC</th>
                <th>FAV</th>
                <th>TRATAMIENTO HIA</th>
                <th>FRECUENCIA</th>
              </tr>
              
            </thead>
            <tbody>
              <tr>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
              </tr>

              <tr>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
              </tr>

              <tr>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
              </tr>
              
            </tbody>
          </table>
        </div>
        
      </div>

      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>



  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
@endsection