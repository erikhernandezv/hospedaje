@extends('layouts.app')

@section('titulopanelprincipal')
Ingresos
@endsection

@section('titulosecundario')
Crear Ingresos
@endsection

@section('content')

  @include('adminlte-templates::common.errors')
  
  {!! Form::model($ingresos, ['route' => ['ingresos.update', $ingresos->ing_consecutivo], 'method' => 'patch']) !!}

    @include('ingresos.fields')

  {!! Form::close() !!}

@endsection