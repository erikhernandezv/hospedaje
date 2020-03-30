@extends('layouts.app')

@section('titulopanelprincipal')
Mantenimiento Equipos
@endsection

@section('titulosecundario')
Crear Mantenimiento Equipos
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'mantenimientoEquipos.store']) !!}

        @include('mantenimiento_equipos.fields')

    {!! Form::close() !!}


    <!--<section class="content-header">
        <h1>
            Mantenimiento Equipos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'mantenimientoEquipos.store']) !!}

                        @include('mantenimiento_equipos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>-->
@endsection
