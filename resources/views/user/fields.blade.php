@if(isset($errors))
  <div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

    <div class="col-md-6">
      {!! Form::text('name', null, ['class' => 'form-control']) !!}

      @if ($errors->has('name'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
      </span>
      @endif
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

    <div class="col-md-6">
      {!! Form::email('email', null, ['class' => 'form-control']) !!}

      @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

    <div class="col-md-6">
      <input name="password1" type="password" value="" class="form-control">

      @if ($errors->has('password1'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password1') }}</strong>
      </span>
      @endif
    </div>
  </div>
@endif