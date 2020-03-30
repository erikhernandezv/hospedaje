@extends('layouts.app')

@section('titulopanelprincipal')
Cajamenor
@endsection

@section('titulosecundario')
Crear Cajamenor
@endsection

@section('content')

  @include('adminlte-templates::common.errors')
  
  {!! Form::model($cajamenor, ['route' => ['cajamenors.update', $cajamenor->caj_consecutivo], 'method' => 'patch']) !!}

    @include('cajamenors.fields')

  {!! Form::close() !!}

@endsection