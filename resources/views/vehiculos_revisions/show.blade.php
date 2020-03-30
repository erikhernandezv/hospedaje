@extends('layouts.app')

@section('titulopanelprincipal')
Vehiculos Revision
@endsection

@section('titulosecundario')
Datos de Vehiculos Revision
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table">
            @include('roles.show_fields')
        </table>
    </div>
    
    <div class="form-group row mb-0">
      <div class="col-md-12 text-right">
        <a href="{!! route('vehiculosRevisions.index') !!}" class="btn btn-outline-danger">
            <i class="ft-skip-back"></i> Atras
        </a>
      </div>
    </div>
@endsection


@section('scripts')
@endsection

   <!-- <section class="content-header">
        <h1>
            Vehiculos Revision
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('vehiculos_revisions.show_fields')
                    <a href="{!! route('vehiculosRevisions.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>-->

