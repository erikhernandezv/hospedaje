@extends('layouts.app')

@section('titulopanelprincipal')
Roles
@endsection

@section('titulosecundario')
Datos de roles
@endsection

@section('content')
    @include('roles.show_fields')

    <div class="form-group row mb-0">
      <div class="col-md-12 text-right">
        <a href="{!! route('roles.index') !!}" class="btn btn-outline-danger">
            <i class="ft-skip-back"></i> Atras
        </a>
      </div>
    </div>
@endsection
