@extends('layouts.app')

@section('titulopanelprincipal')
Eps
@endsection

@section('titulosecundario')
Datos de Eps
@endsection

@section('content')
    @include('eps.show_fields')
    
    <div class="form-group row mb-0">
      <div class="col-md-12 text-right">
        <a href="{!! route('eps.index') !!}" class="btn btn-outline-danger">
            <i class="ft-skip-back"></i> Atras
        </a>
      </div>
    </div>
@endsection


@section('scripts')
@endsection