@extends('layouts.app')

@section('titulopanelprincipal')
Alimentacion
@endsection

@section('titulosecundario')
Crear Alimentacion
@endsection

@section('content')

  @include('adminlte-templates::common.errors')
  
  {!! Form::model($alimentacion, ['route' => ['alimentacions.update', $alimentacion->ali_consecutivo], 'method' => 'patch']) !!}

    @include('alimentacions.fields')

  {!! Form::close() !!}

@endsection