@extends('layouts.app')

@section('titulopanelprincipal')
Vehiculos
@endsection

@section('titulosecundario')
Crear Vehiculos
@endsection

@section('content')

  @include('adminlte-templates::common.errors')
  
  {!! Form::model($vehiculos, ['route' => ['vehiculos.update', $vehiculos->vei_consecutivo], 'method' => 'patch']) !!}

    @include('vehiculos.fields')

  {!! Form::close() !!}

@endsection