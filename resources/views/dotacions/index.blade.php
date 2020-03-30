@extends('layouts.app')

@section('titulopanelprincipal')
Dotaciones
@endsection

@section('titulosecundario')
Nuevas Dotaciones
@endsection

@section('add')
    <li>
        <a href="{!! route('dotacions.create') !!}"><span class="notification-tag badge badge-default badge-danger float-right m-0">Adicionar</span></a>
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
      @include('dotacions.table')
    </div>
    <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $dotacions])

    </div>
@endsection

