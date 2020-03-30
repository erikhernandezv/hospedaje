@extends('layouts.app')

@section('titulopanelprincipal')
Eps
@endsection

@section('titulosecundario')
Crear Eps
@endsection

@section('content')

  @include('adminlte-templates::common.errors')
  
  {!! Form::model($eps, ['route' => ['eps.update', $eps->eps_consecutivo], 'method' => 'patch']) !!}

    @include('eps.fields')

  {!! Form::close() !!}

@endsection