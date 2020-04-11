@extends('layouts.app')

@section('titulopanelprincipal')
Persona
@endsection

@section('titulosecundario')
Datos de Persona
@endsection

@section('content')
    @include('personas.show_fields')

    <div class="form-group row mb-0">
      <div class="col-md-12 text-right">
        <a href="{!! route('personas.index') !!}" class="btn btn-outline-danger">
            <i class="ft-skip-back"></i> Atras
        </a>
      </div>
    </div>
@endsection


@section('scripts')
@endsection
