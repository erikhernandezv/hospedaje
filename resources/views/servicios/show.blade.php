@extends('layouts.app')

@section('titulopanelprincipal')
Servicio
@endsection

@section('titulosecundario')
Datos de Servicio
@endsection

@section('content')
    @include('servicios.show_fields')
    
    <div class="form-group row mb-0">
      <div class="col-md-12 text-right">
        <a href="{!! route('servicios.index') !!}" class="btn btn-outline-danger">
            <i class="ft-skip-back"></i> Atras
        </a>
      </div>
    </div>
@endsection


@section('scripts')
@endsection
