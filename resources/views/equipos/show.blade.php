@extends('layouts.app')

@section('titulopanelprincipal')
Equipos
@endsection

@section('titulosecundario')
Datos de Equipos
@endsection

@section('content')
    @include('equipos.show_fields')

    <div class="form-group row mb-0">
      <div class="col-md-12 text-right">
        <a href="{!! route('equipos.index') !!}" class="btn btn-outline-danger">
            <i class="ft-skip-back"></i> Atras
        </a>
      </div>
    </div>
@endsection


@section('scripts')
@endsection