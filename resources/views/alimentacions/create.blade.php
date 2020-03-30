@extends('layouts.app')

@section('titulopanelprincipal')
Alimentacion
@endsection

@section('titulosecundario')
Crear Alimentacion
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'alimentacions.store']) !!}

        @include('alimentacions.fields')

    {!! Form::close() !!}


    <!--<section class="content-header">
        <h1>
            Alimentacion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'alimentacions.store']) !!}

                        @include('alimentacions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>-->
@endsection
