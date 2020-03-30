@extends('layouts.app')

@section('titulopanelprincipal')
Dotacion
@endsection

@section('titulosecundario')
Crear Dotacion
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'dotacions.store']) !!}

        @include('dotacions.fields')

    {!! Form::close() !!}


    <!--<section class="content-header">
        <h1>
            Dotacion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'dotacions.store']) !!}

                        @include('dotacions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>-->
@endsection
