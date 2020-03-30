@extends('layouts.app')

@section('titulopanelprincipal')
Roles
@endsection

@section('titulosecundario')
Roles
@endsection

@section('add')
    <li>
        <a href="{!! route('roles.create') !!}"><span class="notification-tag badge badge-default badge-danger float-right m-0">Adicionar</span></a>
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
      @include('roles.table')
    </div>
@endsection

