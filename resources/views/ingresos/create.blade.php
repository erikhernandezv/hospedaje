@extends('layouts.app')

@section('titulopanelprincipal')
Ingresos
@endsection

@section('titulosecundario')
Crear Ingresos
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'ingresos.store']) !!}

        @include('ingresos.fields')

    {!! Form::close() !!}


    <!--<section class="content-header">
        <h1>
            Ingresos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'ingresos.store']) !!}

                        @include('ingresos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>-->
@endsection
