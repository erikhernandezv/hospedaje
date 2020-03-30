@extends('layouts.app')

@section('titulopanelprincipal')
Vehiculos Revision
@endsection

@section('titulosecundario')
Crear Vehiculos Revision
@endsection

@section('content')
    @include('adminlte-templates::common.errors')

    {!! Form::open(['route' => 'vehiculosRevisions.store']) !!}

        @include('vehiculos_revisions.fields')

    {!! Form::close() !!}


    <!--<section class="content-header">
        <h1>
            Vehiculos Revision
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'vehiculosRevisions.store']) !!}

                        @include('vehiculos_revisions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>-->
@endsection
