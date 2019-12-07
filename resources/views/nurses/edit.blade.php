@extends('layouts.panel')

@section('content')

<div class="card shadow">
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="mb-0">Parte de enfermeria</h3>
        <h3>Paciente: {{ $nurse->patient }}</h3>
      </div>
      <div class="col text-right">
        <a href="{{ url('nurses') }}" class="btn btn-sm btn-default">
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

    <form action="{{ url('nurses/'.$nurse->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="nav-wrapper">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
          <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#medical" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-folder-17 mr-2"></i>Parte médico</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#nurse" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-book-bookmark mr-2"></i>Enfermería</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#treatment" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-archive-2 mr-2"></i>Evolución / Tratamiento</a>
          </li>
        </ul>
      </div>

      <div class="card shadow">
        <div class="card-body">
          <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="medical" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">

              <div class="row">
                <div class="form-group col-sm-12 col-lg-4">
                  <label for="start_weight">Peso Inicial</label>
                  <input type="text" name="start_weight" class="form-control" value="{{ $nurse->order->medical->start_weight}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <label for="start_pa">PA Inicial</label>
                  <input type="text" name="start_pa" class="form-control" value="{{$nurse->order->medical->start_pa}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <label for="fc">Frecuencia Cardiaca</label>
                  <input type="text" name="fc" class="form-control" value="{{$nurse->order->medical->fc}}" disabled>
                </div>
              </div>

              <div class="row">

                <div class="form-group col-sm-12 col-lg-4">
                  <label for="clinical_trouble">Problemas Clínicos</label>
                  <textarea class="form-control" id="" name="clinical_trouble" rows="2" disabled>{{$nurse->order->medical->clinical_trouble}}</textarea>
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <label for="evaluation">Evaluación</label>
                  <textarea class="form-control" id="" name="evaluation" rows="2" disabled>{{$nurse->order->medical->evaluation}}</textarea>
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <label for="indications">Indicaciones</label>
                  <textarea class="form-control" id="" name="indications" rows="2" disabled>{{$nurse->order->medical->indications}}</textarea>
                </div>

              </div>      

              <div class="row">
                <div class="form-group col-sm-12 col-lg-1">
                  <label for="hour_hd">HORA HD</label>
                  <input type="text" name="hour_hd" class="form-control" value="{{$nurse->order->medical->hour_hd}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <label for="heparin">Heparina</label>
                  <input type="text" name="heparin" class="form-control" value="{{$nurse->order->medical->heparin}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="dry_weight">Peso Seco</label>
                  <input type="text" name="dry_weight" class="form-control" value="{{$nurse->order->medical->dry_weight}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="uf">UF</label>
                  <input type="text" name="uf" class="form-control" value="{{$nurse->order->medical->uf}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="qb">QB</label>
                  <input type="text" name="qb" class="form-control" value="{{$nurse->order->medical->qb}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="qd">QD</label>
                  <input type="text" name="qd" class="form-control" value="{{$nurse->order->medical->qd}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="bathroom">BAÑO</label>
                  <input type="text" name="bathroom" class="form-control" value="{{$nurse->order->medical->bathroom}}" disabled>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-sm-12 col-lg-1">
                  <label for="temperature">T°</label>
                  <input type="text" name="temperature" class="form-control" value="{{$nurse->order->medical->temperature}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <label for="cnd">CND</label>
                  <input type="text" name="cnd" class="form-control" value="{{$nurse->order->medical->cnd}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="start_na">NA INICIAL</label>
                  <input type="text" name="start_na" class="form-control" value="{{$nurse->order->medical->start_na}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="end_na">NA FINAL</label>
                  <input type="text" name="end_na" class="form-control" value="{{$nurse->order->medical->end_na}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="area_filter">ÁREA/FILTRO</label>
                  <input type="text" name="area_filter" class="form-control" value="{{$nurse->order->medical->area_filter}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="membrane">MEMBRANA</label>
                  <input type="text" name="membrane" class="form-control" value="{{$nurse->order->medical->membrane}}" disabled>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="serological">Cond. Serologica</label>
                  <select class="form-control" name="serological" data-toggle="select" title="Simple select" disabled>
                    <option value="{{$nurse->order->medical->serological}}">{{$nurse->order->medical->serological}}</option>
                  </select>
                </div>
              </div>

            </div>

            <div class="tab-pane fade" id="nurse" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">

              <div class="row">
                <div class="form-group col-sm-12 col-lg-3">
                  <label for="hcl">H.CL</label>
                  <input type="text" name="hcl" class="form-control" value="{{ old('hcl', $nurse->hcl) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-3">
                  <label for="frequency">Frecuencia HD</label>
                  <input type="text" name="frequency" class="form-control" value="{{ old('frequency', '3 VECES POR SEMANA', $nurse->frequency) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-3">
                  <label for="nhd">N° HD</label>
                  <input type="text" name="nhd" class="form-control" value="{{ old('nhd', $nurse->nhd) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-3">
                  <label for="others">Otros</label>
                  <select class="form-control" name="others" data-toggle="select" title="Simple select" data-placeholder="Select a state">
                    <option value="{{$nurse->others}}" disabled>{{$nurse->others}}</option>
                    <option value="L - M - V">L - M - V</option>
                    <option value="M - J - S">M - J - S</option>
                  </select>
                </div>
              </div>      

              <div class="row">
                <div class="form-group col-sm-12 col-lg-2">
                  <label for="start_pa">P.A. Inicial</label>
                  <input type="text" name="start_pa" class="form-control" 
                  @if ($nurse->start_pa == null)
                    value="{{ old('start_pa', $nurse->order->medical->start_pa) }}"
                  @else
                    value="{{ old('start_pa', $nurse->start_pa) }}"
                  @endif
                  >
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="end_pa">P.A. Final</label>
                  <input type="text" name="end_pa" class="form-control" value="{{ old('end_pa', $nurse->end_pa) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="start_weight">Peso Inicial</label>
                  <input type="text" name="start_weight" class="form-control"
                  @if ($nurse->start_weight == null)
                    value="{{ old('start_weight', $nurse->order->medical->start_weight) }}"
                  @else
                    value="{{ old('start_weight', $nurse->start_weight) }}"
                  @endif
                  >
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="end_weight">Peso Final</label>
                  <input type="text" name="end_weight" class="form-control" value="{{ old('end_weight', $nurse->end_weight) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="machine">N° de Maquina</label>
                  <input type="text" name="machine" class="form-control" value="{{ old('machine', $nurse->machine) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="brand_model">Marca/Modelo</label>
                  <input type="text" name="brand_model" class="form-control" value="{{ old('brand_model', $nurse->brand_model) }}">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-sm-12 col-lg-2">
                  <label for="filter">Filtro</label>
                  <input type="text" name="filter" class="form-control" value="{{ old('filter', $nurse->filter) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="uf">UF</label>
                  <input type="text" name="uf" class="form-control"
                  @if($nurse->uf == null)
                    value="{{ old('uf', $nurse->order->medical->uf) }}"
                  @else
                    value="{{ old('uf', $nurse->uf) }}"
                  @endif
                  >
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="access1">ACCESO</label>
                  <select class="form-control" name="access1" data-toggle="select" title="Simple select" data-placeholder="Select a state">
                    <option value="{{ $nurse->access1 }}">{{ old('access1',$nurse->access1) }}</option>
                    <option value="CVCT">CVCT</option>
                    <option value="ART">ART</option>
                    <option value="FAV">FAV</option>
                    <option value="INJ">INJ</option>
                    <option value="CVCLP">CVCLP</option>
                  </select>
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="access2">ACCESO</label>
                  <select class="form-control" name="access2" data-toggle="select" title="Simple select" data-placeholder="Select a state">
                    <option value="{{ $nurse->access2 }}">{{ old('access2', $nurse->access2) }}</option>
                    <option value="CVCT">CVCT</option>
                    <option value="ART">ART</option>
                    <option value="FAV">FAV</option>
                    <option value="INJ">INJ</option>
                    <option value="CVCLP">CVCLP</option>
                  </select>
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <label for="epo">EPO</label>
                  <input type="text" name="epo" class="form-control" value="{{ old('epo', $nurse->epo) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <label for="iron">Hierro</label>
                  <input type="text" name="iron" class="form-control" value="{{ old('iron', $nurse->iron) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-2">
                  <label for="vitb12">Vitamina b12</label>
                  <input type="text" name="vitb12" class="form-control" value="{{ old('vitb12', $nurse->vitb12) }}">
                </div>
              </div>

              <div class="row">

                <div class="form-group col-sm-12 col-lg-6">
                  <label for="start_observation">Observación Inicial</label>
                  <textarea class="form-control" id="" name="start_observation" rows="4" value="">{{ old('start_observation', $nurse->start_observation) }}</textarea>
                </div>

                <div class="form-group col-sm-12 col-lg-6">
                  <label for="end_observation">Observación Final</label>
                  <textarea class="form-control" id="" name="end_observation" rows="4" value="">{{ old('end_observation', $nurse->end_observation) }}</textarea>
                </div>

              </div>
            </div>

            <div class="tab-pane fade" id="treatment" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
              <div class="row">
                <div class="form-group col-sm-12 col-lg-1">
                  <label for="hr">HR</label>
                  <input type="text" name="hr" class="form-control" value="{{ old('hr', $nurse->hr) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <label for="pa">PA</label>
                  <input type="text" name="pa" class="form-control" value="{{ old('pa', $nurse->pa) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <label for="px">PX</label>
                  <input type="text" name="px" class="form-control" value="{{ old('px', $nurse->px) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <label for="qb">QB</label>
                  <input type="text" name="qb" class="form-control" value="{{ old('qb', $nurse->qb) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <label for="cnd">CND</label>
                  <input type="text" name="cnd" class="form-control" value="{{ old('cnd', $nurse->cnd) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <label for="ra">RA</label>
                  <input type="text" name="ra" class="form-control" value="{{ old('ra', $nurse->ra) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <label for="rv">RV</label>
                  <input type="text" name="rv" class="form-control" value="{{ old('rv', $nurse->rv) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <label for="ptm">PTM</label>
                  <input type="text" name="ptm" class="form-control" value="{{ old('ptm', $nurse->ptm) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <label for="obs">Observación Final</label>
                  <textarea class="form-control" id="" name="obs" rows="1">{{ old('obs', $nurse->obs) }}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="hr2" class="form-control" value="{{ old('hr2', $nurse->hr2) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="pa2" class="form-control" value="{{ old('pa2', $nurse->pa2) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="px2" class="form-control" value="{{ old('px2', $nurse->px2) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="qb2" class="form-control" value="{{ old('qb2', $nurse->qb2) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="cnd2" class="form-control" value="{{ old('cnd2', $nurse->cnd2) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ra2" class="form-control" value="{{ old('ra2', $nurse->ra2) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="rv2" class="form-control" value="{{ old('rv2', $nurse->rv2) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ptm2" class="form-control" value="{{ old('ptm2', $nurse->ptm2) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <textarea class="form-control" id="" name="obs2" rows="1">{{ old('obs2', $nurse->obs2) }}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="hr3" class="form-control" value="{{ old('hr3', $nurse->hr3) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="pa3" class="form-control" value="{{ old('pa3', $nurse->pa3) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="px3" class="form-control" value="{{ old('px3', $nurse->px3) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="qb3" class="form-control" value="{{ old('qb3', $nurse->qb3) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="cnd3" class="form-control" value="{{ old('cnd3', $nurse->cnd3) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ra3" class="form-control" value="{{ old('ra3', $nurse->ra3) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="rv3" class="form-control" value="{{ old('rv3', $nurse->rv3) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ptm3" class="form-control" value="{{ old('ptm3', $nurse->ptm3) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <textarea class="form-control" id="" name="obs3" rows="1">{{ old('obs3', $nurse->obs3) }}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="hr4" class="form-control" value="{{ old('hr4', $nurse->hr4) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="pa4" class="form-control" value="{{ old('pa4', $nurse->pa4) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="px4" class="form-control" value="{{ old('px4', $nurse->px4) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="qb4" class="form-control" value="{{ old('qb4', $nurse->qb4) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="cnd4" class="form-control" value="{{ old('cnd4', $nurse->cnd4) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ra4" class="form-control" value="{{ old('ra4', $nurse->ra4) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="rv4" class="form-control" value="{{ old('rv4', $nurse->rv4) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ptm4" class="form-control" value="{{ old('ptm4', $nurse->ptm4) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <textarea class="form-control" id="" name="obs4" rows="1">{{ old('obs4', $nurse->obs4) }}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="hr5" class="form-control" value="{{ old('hr5', $nurse->hr5) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="pa5" class="form-control" value="{{ old('pa5', $nurse->pa5) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="px5" class="form-control" value="{{ old('px5', $nurse->px5) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="qb5" class="form-control" value="{{ old('qb5', $nurse->qb5) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="cnd5" class="form-control" value="{{ old('cnd5', $nurse->cnd5) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ra5" class="form-control" value="{{ old('ra5', $nurse->ra5) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="rv5" class="form-control" value="{{ old('rv5', $nurse->rv5) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ptm5" class="form-control" value="{{ old('ptm5', $nurse->ptm5) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <textarea class="form-control" id="" name="obs5" rows="1">{{ old('obs5', $nurse->obs5) }}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="hr6" class="form-control" value="{{ old('hr6' , $nurse->hr6) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="pa6" class="form-control" value="{{ old('pa6' , $nurse->pa6) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="px6" class="form-control" value="{{ old('px6' , $nurse->px6) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="qb6" class="form-control" value="{{ old('qb6' , $nurse->qb6) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="cnd6" class="form-control" value="{{ old('cnd6' , $nurse->cnd6) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ra6" class="form-control" value="{{ old('ra6' , $nurse->ra6) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="rv6" class="form-control" value="{{ old('rv6' , $nurse->rv6) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ptm6" class="form-control" value="{{ old('ptm6' , $nurse->ptm6) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <textarea class="form-control" id="" name="obs6" rows="1">{{ old('obs6' , $nurse->obs6) }}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="hr7" class="form-control" value="{{ old('hr7', $nurse->hr7) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="pa7" class="form-control" value="{{ old('pa7', $nurse->pa7) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="px7" class="form-control" value="{{ old('px7', $nurse->px7) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="qb7" class="form-control" value="{{ old('qb7', $nurse->qb7) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="cnd7" class="form-control" value="{{ old('cnd7', $nurse->cnd7) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ra7" class="form-control" value="{{ old('ra7', $nurse->ra7) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="rv7" class="form-control" value="{{ old('rv7', $nurse->rv7) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ptm7" class="form-control" value="{{ old('ptm7', $nurse->ptm7) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <textarea class="form-control" id="" name="obs7" rows="1">{{ old('obs7', $nurse->obs7) }}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="hr8" class="form-control" value="{{ old('hr8' , $nurse->hr8) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="pa8" class="form-control" value="{{ old('pa8' , $nurse->pa8) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="px8" class="form-control" value="{{ old('px8' , $nurse->px8) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="qb8" class="form-control" value="{{ old('qb8' , $nurse->qb8) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="cnd8" class="form-control" value="{{ old('cnd8' , $nurse->cnd8) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ra8" class="form-control" value="{{ old('ra8' , $nurse->ra8) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="rv8" class="form-control" value="{{ old('rv8' , $nurse->rv8) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-1">
                  <input type="text" name="ptm8" class="form-control" value="{{ old('ptm8' , $nurse->ptm8) }}">
                </div>

                <div class="form-group col-sm-12 col-lg-4">
                  <textarea class="form-control" id="" name="obs8" rows="1">{{ old('obs8' , $nurse->obs8) }}</textarea>
                </div>
              </div>
              
            </div>
            <button type="submit" class="btn btn-primary" >Guardar</button>
          </div>

        </div>
      </div>
    </form>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
@endsection