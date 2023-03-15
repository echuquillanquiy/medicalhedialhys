@extends('layouts.panel')

@section('content')

<div class="card shadow">
  @if (session('notification'))
    <div class="alert alert-success" role="alert">
      <span class="alert-icon"><i class="ni ni-curved-next"></i></span>
      {{ session('notification') }}
    </div>
  @endif
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="mb-0">Medicina</h3>
        <h3>Paciente: {{ $medical->patient }}</h3>
      </div>
      <div class="col text-right">
        <a href="{{ url('medicals') }}" class="btn btn-sm btn-default">
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


  <form action="{{ url('medicals/'.$medical->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">


            <div class="form-group col-sm-12 col-lg-2">
                <label for="start_hour">Hora Inicial</label>
                <input type="time" name="start_hour" class="form-control" value="{{ old('start_hour', $medical->start_hour) }}">
            </div>



      <div class="form-group col-sm-12 col-lg-3">
        <label for="start_weight">Peso Inicial</label>
        <input type="text" name="start_weight" class="form-control" value="{{ old('start_weight', $medical->start_weight) }}">
      </div>

      <div class="form-group col-sm-12 col-lg-3">
        <label for="start_pa">PA Inicial</label>
        <input type="text" name="start_pa" class="form-control" value="{{ old('start_pa', $medical->start_pa) }}">
      </div>

      <div class="form-group col-sm-12 col-lg-4">
        <label for="fc">Frecuencia Cardiaca</label>
        <input type="text" name="fc" class="form-control" value="{{ old('fc', $medical->fc) }}">
      </div>
    </div>

    <div class="row">

      @if ($medical->clinical_trouble == null)

        <div class="form-group col-sm-12 col-lg-3">
          <label for="clinical_trouble">Problemas Clínicos:</label>
          <textarea class="form-control" id="" name="clinical_trouble" rows="2">{{ old('clinical_trouble', 'ERC-5 HD') }}</textarea>
        </div>
      @else
        <div class="form-group col-sm-12 col-lg-3">
          <label for="clinical_trouble">Problemas Clínicos</label>
          <textarea class="form-control" id="" name="clinical_trouble" rows="2">{{ $medical->clinical_trouble }}</textarea>
        </div>
      @endif

      <div class="form-group col-sm-12 col-lg-3">
        <label for="evaluation">Evaluación</label>
        <textarea class="form-control" id="" name="evaluation" rows="2">{{ old('evaluation' ,$medical->evaluation) }}</textarea>
      </div>

      <div class="form-group col-sm-12 col-lg-3">
        <label for="indications">Indicaciones</label>
        <textarea class="form-control" id="" name="indications" rows="2">{{ old('indications', $medical->indications) }}</textarea>
      </div>

          <div class="form-group col-sm-12 col-lg-3">
              <label for="signal">Signos y Sintomas</label>
              <textarea class="form-control" id="" name="signal" rows="2">{{ old('signal', $medical->signal) }}</textarea>
          </div>

    </div>

    <div class="row">
      <div class="form-group col-sm-12 col-lg-1">
        <label for="hour_hd">HORA HD</label>
        <input type="text" name="hour_hd" class="form-control" value="{{ old('hour_hd', $medical->hour_hd) }}">
      </div>

      <div class="form-group col-sm-12 col-lg-1">
        <label for="heparin">Heparina</label>
        <input type="text" name="heparin" class="form-control" value="{{ old('heparin', $medical->heparin) }}">
      </div>

      <div class="form-group col-sm-12 col-lg-2">
        <label for="dry_weight">Peso Seco</label>
        <input type="text" name="dry_weight" class="form-control" value="{{ old('dry_weight', $medical->dry_weight) }}">
      </div>

      <div class="form-group col-sm-12 col-lg-2">
        <label for="uf">UF</label>
        <input type="text" name="uf" class="form-control" value="{{ old('uf', $medical->uf) }}">
      </div>

      <div class="form-group col-sm-12 col-lg-2">
        <label for="qb">QB</label>
        <input type="text" name="qb" class="form-control" value="{{ old('qb', $medical->qb) }}">
      </div>

      <div class="form-group col-sm-12 col-lg-2">
        <label for="qd">QD</label>
          @if($medical->qd)
              <input type="text" name="qd" class="form-control" value="{{ $medical->qd }}">
          @else
            <input type="text" name="qd" class="form-control" value="{{ old('qd', '500') }}">
          @endif
      </div>

      <div class="form-group col-sm-12 col-lg-2">
        <label for="bicarbonat">Bicarbonato</label>
        <input type="text" name="bicarbonat" class="form-control" value="{{ old('bicarbonat', $medical->bicarbonat) }}">
      </div>
    </div>

    <div class="row">

        <div class="form-group col-sm-12 col-lg-2">
            <label for="start_na">NA INICIAL</label>
            <input type="text" name="start_na" class="form-control" value="{{ old('start_na', $medical->start_na) }}">
        </div>

      <div class="form-group col-sm-12 col-lg-1">
        <label for="cnd">CND</label>
        <input type="text" name="cnd" class="form-control" value="{{ old('cnd', $medical->cnd) }}">
      </div>

      <div class="form-group col-sm-12 col-lg-2">
        <label for="end_na">NA FINAL</label>
        <input type="text" name="end_na" class="form-control" value="{{ old('end_na', $medical->end_na) }}">
      </div>

        <div class="form-group col-sm-12 col-lg-1">
            <label for="profile_na">Perfil Na</label>
            @if($medical->profile_na)
                <input type="text" name="profile_na" class="form-control" value="{{ $medical->profile_na }}">
            @else
                <input type="text" name="profile_na" class="form-control" value="{{ old('profile_na', 'PERFIL L') }}">
            @endif
        </div>

      <div class="form-group col-sm-12 col-lg-2">
        <label for="area_filter">ÁREA/FILTRO</label>
          @if($medical->area_filter)
              <input type="text" name="area_filter" class="form-control" value="{{ $medical->area_filter }}">
          @else
              <input type="text" name="area_filter" class="form-control" value="{{ old('area_filter', '1.9') }}">
          @endif

      </div>

      <div class="form-group col-sm-12 col-lg-2">
        <label for="membrane">MEMBRANA</label>
          @if($medical->membrane)
              <input type="text" name="membrane" class="form-control" value="{{ $medical->membrane }}">
          @else
              <input type="text" name="membrane" class="form-control" value="{{ old('membrane', 'PSF') }}">
          @endif

      </div>

        <div class="form-group col-sm-12 col-lg-2">
            <label for="profile_uf">Perfil UF:</label>
            @if($medical->profile_uf)
                <input type="text" name="profile_uf" class="form-control" value="{{ $medical->profile_uf }}">
            @else
                <input type="text" name="profile_uf" class="form-control" value="{{ old('profile_uf', 'PERFIL L') }}">
            @endif

        </div>

<!--      <div class="form-group col-sm-12 col-lg-2">
        <label for="serological">Cond. Serologica</label>
        <select class="form-control" name="serological" data-toggle="select" title="Simple select" data-placeholder="Select a state">
          <option value="{{ $medical->serological }}" disabled="">{{ $medical->serological }}</option>
          <option value="NEGATIVO">NEGATIVO</option>
          <option value="POSITIVO">POSITIVO</option>
        </select>
      </div>-->
    </div>

    <div class="row">


<!--      <div class="form-group col-sm-12 col-lg-3">
        <label for="dializer">Dializador</label>
        @if ( $medical->dializar != null )
          <input type="text" name="dializer" class="form-control" value="{{ $medical->dializer }}">
        @else
          <input type="text" name="dializer" class="form-control" value="{{ old('dializer', 'ELISIO') }}">
        @endif

      </div>-->
        <div class="form-group col-sm-12 col-lg-4">
            <label for="end_evaluation">Evaluación Final</label>
            <textarea class="form-control" id="" name="end_evaluation" rows="2">{{ old('end_evaluation' ,$medical->end_evaluation) }}</textarea>
        </div>

        <div class="form-group col-sm-12 col-lg-2">
            <label for="end_hour">Hora final</label>
            <input type="time" name="end_hour" class="form-control" value="{{ old('end_hour', $medical->end_hour) }}">
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
