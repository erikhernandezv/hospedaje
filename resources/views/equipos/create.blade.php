@extends('layouts.app')

@section('titulopanelprincipal')
Equipos
@endsection

@section('titulosecundario')
Nuevos Equipos
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'equipos.store']) !!}

        @include('equipos.fields')

    {!! Form::close() !!}

@endsection
