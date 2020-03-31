@extends('layouts.app')

@section('titulopanelprincipal')
Equipos
@endsection

@section('titulosecundario')
Nuevos Equipos
@endsection

@section('content')

  @include('adminlte-templates::common.errors')
  
  {!! Form::model($equipos, ['route' => ['equipos.update', $equipos->equ_consecutivo], 'method' => 'patch']) !!}

    @include('equipos.fields')

  {!! Form::close() !!}

@endsection