@extends('layouts.app')

@section('titulopanelprincipal')
Eps
@endsection

@section('titulosecundario')
Nuevas Eps
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'eps.store']) !!}

        @include('eps.fields')

    {!! Form::close() !!}

@endsection
