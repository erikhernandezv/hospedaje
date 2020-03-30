@extends('layouts.app')

@section('titulopanelprincipal')
Mantenimiento Equipos
@endsection

@section('titulosecundario')
Crear Mantenimiento Equipos
@endsection

@section('content')

  @include('adminlte-templates::common.errors')
  
  {!! Form::model($mantenimientoEquipos, ['route' => ['mantenimientoEquipos.update', $mantenimientoEquipos->meq_consecutivo], 'method' => 'patch']) !!}

    @include('mantenimiento_equipos.fields')

  {!! Form::close() !!}

@endsection