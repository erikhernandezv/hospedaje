@extends('layouts.app')

@section('titulopanelprincipal')
Servicios
@endsection

@section('titulosecundario')
Servicios
@endsection

@section('add')
    <li>
        <a href="{!! route('servicios.create') !!}"><span class="notification-tag badge badge-default badge-danger float-right m-0">Adicionar</span></a>
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
      @include('servicios.table')
    </div>
    <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $servicios])

    </div>
@endsection

