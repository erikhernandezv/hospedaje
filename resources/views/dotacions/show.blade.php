@extends('layouts.app')

@section('titulopanelprincipal')
Dotaciones
@endsection

@section('titulosecundario')
Datos de Dotaciones
@endsection

@section('content')
    @include('dotacions.show_fields')
	
	<div class="form-group row mb-0">
      <div class="col-md-12 text-right">
		<a href="{!! route('dotacions.index') !!}" class="btn btn-outline-danger">
	    	<i class="ft-skip-back"></i> Atras
	  	</a>
	  </div>
	</div>
@endsection


@section('scripts')
@endsection