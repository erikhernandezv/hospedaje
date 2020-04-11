@extends('layouts.app')

@section('titulopanelprincipal')
Vehiculos
@endsection

@section('titulosecundario')
Nuevos Vehiculos
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'vehiculos.store']) !!}

        @include('vehiculos.fields')

    {!! Form::close() !!}

@endsection
