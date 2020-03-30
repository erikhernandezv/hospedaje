@extends('layouts.app')

@section('titulopanelprincipal')
Roles
@endsection

@section('titulosecundario')
Crear roles
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'roles.store']) !!}

        @include('roles.fields')

    {!! Form::close() !!}

@endsection
