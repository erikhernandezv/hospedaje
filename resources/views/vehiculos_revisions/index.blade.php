@extends('layouts.app')

@section('titulopanelprincipal')
Vehiculos Revisions
@endsection

@section('titulosecundario')
Vehiculos Revisions
@endsection

@section('add')
    <li>
        <a href="{!! route('vehiculosRevisions.create') !!}"><span class="notification-tag badge badge-default badge-danger float-right m-0">Adicionar</span></a>
    </li>
@endsection

@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
    @include('flash::message')
</div>
@endif

    <div class="form-group row">
      @include('vehiculos_revisions.table')
    </div>
    <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $vehiculosRevisions])

    </div>
@endsection

