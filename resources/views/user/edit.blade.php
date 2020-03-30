@extends('layouts.app')

@section('titulopanelprincipal')
Usuarios
@endsection

@section('titulosecundario')
Edición de usuarios
@endsection

@section('content')

	<div class="clearfix"></div>
	@include('flash::message')
	<div class="clearfix"></div>

	{!! Form::model($usuarios, ['route' => ['users.update', $usuarios->id], 'method' => 'patch']) !!}

	  @include('user.fields')

	  <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4 text-right">
	      {!! Form::button('<i class="la la-check"></i> Actualizar', ['type' => 'submit', 'class' => 'btn btn-outline-info']) !!}
	      <a href="{!! route('users.index') !!}" class="btn btn-outline-danger">
	        <i class="la la-remove"></i> Cancelar
	      </a>
	    </div>
	  </div>

	{!! Form::close() !!}

@stop


@section('scripts')
@endsection