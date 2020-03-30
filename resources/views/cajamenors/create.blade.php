@extends('layouts.app')

@section('titulopanelprincipal')
Cajamenor
@endsection

@section('titulosecundario')
Crear Cajamenor
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'cajamenors.store']) !!}

        @include('cajamenors.fields')

    {!! Form::close() !!}


    <!--<section class="content-header">
        <h1>
            Cajamenor
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'cajamenors.store']) !!}

                        @include('cajamenors.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>-->
@endsection
