@extends('layouts.app')

@section('titulopanelprincipal')
Servicio
@endsection

@section('titulosecundario')
Crear Servicio
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'servicios.store']) !!}

        @include('servicios.fields')

    {!! Form::close() !!}


    <!--<section class="content-header">
        <h1>
            Servicio
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'servicios.store']) !!}

                        @include('servicios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>-->
@endsection
