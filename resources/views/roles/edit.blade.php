@extends('layouts.app')

@section('titulopanelprincipal')
Roles
@endsection

@section('titulosecundario')
Crear roles
@endsection

@section('content')

  @include('adminlte-templates::common.errors')

  {!! Form::model($roles, ['route' => ['roles.update', $roles->id], 'method' => 'patch']) !!}

    @include('roles.fields')

  {!! Form::close() !!}

@endsection