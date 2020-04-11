@extends('layouts.app')

@section('titulopanelprincipal')
Vehiculos
@endsection

@section('titulosecundario')
Datos de Vehiculos
@endsection

@section('content')
    @include('vehiculos.show_fields')
    
    <div class="form-group row mb-0">
      <div class="col-md-12 text-right">
        <a href="{!! route('vehiculos.index') !!}" class="btn btn-outline-danger">
            <i class="ft-skip-back"></i> Atras
        </a>
      </div>
    </div>
@endsection


@section('scripts')
@endsection
