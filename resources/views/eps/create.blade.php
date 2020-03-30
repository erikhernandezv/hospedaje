@extends('layouts.app')

@section('titulopanelprincipal')
Eps
@endsection

@section('titulosecundario')
Crear Eps
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'eps.store']) !!}

        @include('eps.fields')

    {!! Form::close() !!}


    <!--<section class="content-header">
        <h1>
            Eps
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'eps.store']) !!}

                        @include('eps.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>-->
@endsection
