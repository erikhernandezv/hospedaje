@extends('layouts.app')

@section('titulopanelprincipal')
Usuarios
@endsection

@section('titulosecundario')
Criterios de busqueda
@endsection

@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
    @include('flash::message')
</div>
@endif

{!! Form::model(Request::all(), ['route' => 'users.index', 'method' => 'GET',  'class' => 'form-horizontal']) !!}

    @include('user.index_fields')

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4 text-right">
            <button type="submit" class="btn btn-outline-info"><i class="ft-message-square"></i>Consultar</button>
            <a href="{{ route('home') }}" class="btn btn-outline-danger"><i class="ft-x"></i> Cancelar</a>
        </div>
    </div>

  {!! Form::close() !!}

  <div class="form-group row">
      @include('user.table')
  </div>
@endsection