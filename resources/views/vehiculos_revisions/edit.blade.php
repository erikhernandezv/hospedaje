@extends('layouts.app')

@section('titulopanelprincipal')
Vehiculos Revision
@endsection

@section('titulosecundario')
Crear Vehiculos Revision
@endsection

@section('content')

  @include('adminlte-templates::common.errors')
  
  {!! Form::model($vehiculosRevision, ['route' => ['vehiculosRevisions.update', $vehiculosRevision->vre_consecutivo], 'method' => 'patch']) !!}

    @include('vehiculos_revisions.fields')

  {!! Form::close() !!}

@endsection