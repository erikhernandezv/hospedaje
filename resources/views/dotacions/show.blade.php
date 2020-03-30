@extends('layouts.app')

@section('titulopanelprincipal')
Dotacion
@endsection

@section('titulosecundario')
Datos de Dotacion
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table">
            @include('roles.show_fields')
        </table>
    </div>
    
    <div class="form-group row mb-0">
      <div class="col-md-12 text-right">
        <a href="{!! route('dotacions.index') !!}" class="btn btn-outline-danger">
            <i class="ft-skip-back"></i> Atras
        </a>
      </div>
    </div>
@endsection


@section('scripts')
@endsection

   <!-- <section class="content-header">
        <h1>
            Dotacion
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('dotacions.show_fields')
                    <a href="{!! route('dotacions.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>-->

