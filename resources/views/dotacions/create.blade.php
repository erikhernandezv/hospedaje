@extends('layouts.app')

@section('titulopanelprincipal')
Dotaciones
@endsection

@section('titulosecundario')
Nuevas Dotaciones
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'dotacions.store']) !!}

        @include('dotacions.fields')

    {!! Form::close() !!}

@endsection
