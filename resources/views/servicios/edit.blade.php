@extends('layouts.app')

@section('titulopanelprincipal')
Servicio
@endsection

@section('titulosecundario')
Crear Servicio
@endsection

@section('content')

  @include('adminlte-templates::common.errors')
  
  {!! Form::model($servicio, ['route' => ['servicios.update', $servicio->ser_consecutivo], 'method' => 'patch']) !!}

    @include('servicios.fields')

  {!! Form::close() !!}

@endsection