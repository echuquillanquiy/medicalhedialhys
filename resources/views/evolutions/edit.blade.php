@extends('layouts.panel')

@section('content')

<div class="card shadow">
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="mb-0">Formulario de Tratamiento</h3>
      </div>
      <div class="col text-right">
        <a href="{{ url('evolutions/'.$evolution->id) }}" class="btn btn-sm btn-default">
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

    
                
    <form action="{{ url('evolutions/'.$evolution->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="form-group col-sm-12 col-lg-1">
          <label for="hr">HR</label>
          <input type="text" name="hr" class="form-control" value="{{ old('hr', $evolution->hr) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <label for="pa">PA</label>
          <input type="text" name="pa" class="form-control" value="{{ old('pa', $evolution->pa) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <label for="px">PX</label>
          <input type="text" name="px" class="form-control" value="{{ old('px',$evolution->px) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <label for="qb">QB</label>
          <input type="text" name="qb" class="form-control" value="{{ old('qb', $evolution->qb) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <label for="cnd">CND</label>
          <input type="text" name="cnd" class="form-control" value="{{ old('cnd', $evolution->cnd) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <label for="ra">RA</label>
          <input type="text" name="ra" class="form-control" value="{{ old('ra', $evolution->ra) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <label for="rv">RV</label>
          <input type="text" name="rv" class="form-control" value="{{ old('rv', $evolution->rv) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <label for="ptm">PTM</label>
          <input type="text" name="ptm" class="form-control" value="{{ old('ptm', $evolution->ptm) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-4">
          <label for="obs">Observación Final</label>
          <textarea class="form-control" id="" name="obs" rows="1">{{ old('obs', $evolution->obs) }}</textarea>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="hr2" class="form-control" value="{{ old('hr2', $evolution->hr2) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="pa2" class="form-control" value="{{ old('pa2', $evolution->pa2) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="px2" class="form-control" value="{{ old('px2', $evolution->px2) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="qb2" class="form-control" value="{{ old('qb2', $evolution->qb2) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="cnd2" class="form-control" value="{{ old('cnd2', $evolution->cnd2) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ra2" class="form-control" value="{{ old('ra2', $evolution->ra2) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="rv2" class="form-control" value="{{ old('rv2', $evolution->rv2) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ptm2" class="form-control" value="{{ old('ptm2', $evolution->ptm) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-4">
          <textarea class="form-control" id="" name="obs2" rows="1">{{ old('obs2', $evolution->obs2) }}</textarea>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="hr3" class="form-control" value="{{ old('hr3', $evolution->hr3) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="pa3" class="form-control" value="{{ old('pa3', $evolution->pa3) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="px3" class="form-control" value="{{ old('px3', $evolution->px3) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="qb3" class="form-control" value="{{ old('qb3', $evolution->qb3) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="cnd3" class="form-control" value="{{ old('cnd3', $evolution->cnd3) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ra3" class="form-control" value="{{ old('ra3', $evolution->ra3) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="rv3" class="form-control" value="{{ old('rv3', $evolution->rv3) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ptm3" class="form-control" value="{{ old('ptm3', $evolution->ptm3) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-4">
          <textarea class="form-control" id="" name="obs3" rows="1">{{ old('obs3',$evolution->obs3) }}</textarea>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="hr4" class="form-control" value="{{ old('hr4', $evolution->hr4) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="pa4" class="form-control" value="{{ old('pa4', $evolution->pa4) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="px4" class="form-control" value="{{ old('px4', $evolution->px4) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="qb4" class="form-control" value="{{ old('qb4', $evolution->qb4) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="cnd4" class="form-control" value="{{ old('cnd4', $evolution->cnd4) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ra4" class="form-control" value="{{ old('ra4', $evolution->ra4) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="rv4" class="form-control" value="{{ old('rv4', $evolution->rv4) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ptm4" class="form-control" value="{{ old('ptm4', $evolution->ptm4) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-4">
          <textarea class="form-control" id="" name="obs4" rows="1">{{ old('obs4', $evolution->obs4 ) }}</textarea>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="hr5" class="form-control" value="{{ old('hr5', $evolution->hr5) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="pa5" class="form-control" value="{{ old('pa5',$evolution->pa5) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="px5" class="form-control" value="{{ old('px5',$evolution->px5) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="qb5" class="form-control" value="{{ old('qb5',$evolution->qb5) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="cnd5" class="form-control" value="{{ old('cnd5',$evolution->cnd5) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ra5" class="form-control" value="{{ old('ra5',$evolution->ra5) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="rv5" class="form-control" value="{{ old('rv5',$evolution->rv5) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ptm5" class="form-control" value="{{ old('ptm5',$evolution->ptm5) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-4">
          <textarea class="form-control" id="" name="obs5" rows="1">{{ old('obs5',$evolution->obs5) }}</textarea>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="hr6" class="form-control" value="{{ old('hr6', $evolution->hr6) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="pa6" class="form-control" value="{{ old('pa6', $evolution->pa6) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="px6" class="form-control" value="{{ old('px6', $evolution->px6) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="qb6" class="form-control" value="{{ old('qb6', $evolution->qb6) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="cnd6" class="form-control" value="{{ old('cnd6', $evolution->cnd6) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ra6" class="form-control" value="{{ old('ra6', $evolution->ra6) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="rv6" class="form-control" value="{{ old('rv6', $evolution->rv6) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ptm6" class="form-control" value="{{ old('ptm6', $evolution->ptm6) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-4">
          <textarea class="form-control" id="" name="obs6" rows="1">{{ old('obs6', $evolution->obs6) }}</textarea>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="hr7" class="form-control" value="{{ old('hr7', $evolution->hr7) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="pa7" class="form-control" value="{{ old('pa7', $evolution->pa7) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="px7" class="form-control" value="{{ old('px7', $evolution->px7) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="qb7" class="form-control" value="{{ old('qb7', $evolution->qb7) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="cnd7" class="form-control" value="{{ old('cnd7', $evolution->cnd7) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ra7" class="form-control" value="{{ old('ra7', $evolution->ra7) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="rv7" class="form-control" value="{{ old('rv7', $evolution->rv7) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ptm7" class="form-control" value="{{ old('ptm7', $evolution->ptm7) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-4">
          <textarea class="form-control" id="" name="obs7" rows="1">{{ old('obs7', $evolution->obs7) }}</textarea>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="hr8" class="form-control" value="{{ old('hr8', $evolution->hr8) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="pa8" class="form-control" value="{{ old('pa8', $evolution->pa8) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="px8" class="form-control" value="{{ old('px8', $evolution->px8) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="qb8" class="form-control" value="{{ old('qb8', $evolution->qb8) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="cnd8" class="form-control" value="{{ old('cnd8', $evolution->cnd8) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ra8" class="form-control" value="{{ old('ra8', $evolution->ra8) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="rv8" class="form-control" value="{{ old('rv8', $evolution->rv8) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-1">
          <input type="text" name="ptm8" class="form-control" value="{{ old('ptm8', $evolution->ptm8) }}">
        </div>

        <div class="form-group col-sm-12 col-lg-4">
          <textarea class="form-control" id="" name="obs8" rows="1">{{ old('obs8', $evolution->obs8) }}</textarea>
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