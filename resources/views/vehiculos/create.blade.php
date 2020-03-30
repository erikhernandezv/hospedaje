@extends('layouts.app')

@section('titulopanelprincipal')
Vehiculos
@endsection

@section('titulosecundario')
Crear Vehiculos
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'vehiculos.store']) !!}

        @include('vehiculos.fields')

    {!! Form::close() !!}


    <!--<section class="content-header">
        <h1>
            Vehiculos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'vehiculos.store']) !!}

                        @include('vehiculos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>-->
@endsection
