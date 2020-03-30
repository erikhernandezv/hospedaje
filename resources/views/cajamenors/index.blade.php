@extends('layouts.app')

@section('titulopanelprincipal')
Cajamenors
@endsection

@section('titulosecundario')
Cajamenors
@endsection

@section('add')
    <li>
        <a href="{!! route('cajamenors.create') !!}"><span class="notification-tag badge badge-default badge-danger float-right m-0">Adicionar</span></a>
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
      @include('cajamenors.table')
    </div>
    <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $cajamenors])

    </div>
@endsection

