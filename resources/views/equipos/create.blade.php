@extends('layouts.app')

@section('titulopanelprincipal')
Equipos
@endsection

@section('titulosecundario')
Crear Equipos
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'equipos.store']) !!}

        @include('equipos.fields')

    {!! Form::close() !!}


    <!--<section class="content-header">
        <h1>
            Equipos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'equipos.store']) !!}

                        @include('equipos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>-->
@endsection
