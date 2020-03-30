@extends('layouts.app')

@section('titulopanelprincipal')
    Restablecer la contraseña
@endsection

@section('titulosecundario')
    Restablecer la contraseña
@endsection

@section('content')

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="form form-horizontal">
    @csrf
        <div class="form-body">
            <div class="form-group row">
                <label class="col-md-3 label-control" for="timesheetinput1">{{ __('Dirección de Correo Electrónico') }}</label>
                <div class="col-md-9 mx-auto">
                    <div class="position-relative has-icon-left">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Correo Electrónico">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="text-right">

            <button type="submit" class="btn btn-outline-info"><i class="ft-message-square"></i>Enviar enlace</button>
            <a href="{{ route('home') }}" class="btn btn-outline-danger"><i class="ft-user"></i> Cancelar</a>

        </div>
    </form>

</div>
@endsection
