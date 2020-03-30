@extends('layouts.app')

@section('titulopanelprincipal')
Persona
@endsection

@section('titulosecundario')
Crear Persona
@endsection

@section('content')

  @include('adminlte-templates::common.errors')
  
  {!! Form::model($persona, ['route' => ['personas.update', $persona->per_consecutivo], 'method' => 'patch']) !!}

    @include('personas.fields')

  {!! Form::close() !!}

@endsection