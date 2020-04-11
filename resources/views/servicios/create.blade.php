@extends('layouts.app')

@section('titulopanelprincipal')
Servicio
@endsection

@section('titulosecundario')
Nuevos Servicios
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'servicios.store']) !!}

        @include('servicios.fields')

    {!! Form::close() !!}

@endsection
