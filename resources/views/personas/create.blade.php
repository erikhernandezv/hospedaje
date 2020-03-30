@extends('layouts.app')

@section('titulopanelprincipal')
Persona
@endsection

@section('titulosecundario')
Crear Persona
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'personas.store']) !!}

        @include('personas.fields')

    {!! Form::close() !!}


    <!--<section class="content-header">
        <h1>
            Persona
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'personas.store']) !!}

                        @include('personas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>-->
@endsection
