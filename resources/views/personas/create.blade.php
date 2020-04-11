@extends('layouts.app')

@section('titulopanelprincipal')
Persona
@endsection

@section('titulosecundario')
Nuevas Persona
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'personas.store']) !!}

        @include('personas.fields')

    {!! Form::close() !!}

@endsection
