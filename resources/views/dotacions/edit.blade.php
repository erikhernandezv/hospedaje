@extends('layouts.app')

@section('titulopanelprincipal')
Dotacion
@endsection

@section('titulosecundario')
Crear Dotacion
@endsection

@section('content')

  @include('adminlte-templates::common.errors')
  
  {!! Form::model($dotacion, ['route' => ['dotacions.update', $dotacion->dot_consecutivo], 'method' => 'patch']) !!}

    @include('dotacions.fields')

  {!! Form::close() !!}

@endsection