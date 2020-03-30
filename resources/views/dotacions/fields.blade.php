<div class="form-group row">
	<!-- Dot Detalle Field -->
	<label for="dot_detalle" class="col-md-3 col-form-label text-md-right">{{ __('Detalle') }}</label>
	<div class="form-group col-sm-8">
		{!! Form::text('dot_detalle', null, ['class' => 'form-control']) !!}

		@if ($errors->has('name'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('dot_detalle') }}</strong>
			</span>
		@endif
	</div>
</div>

<div class="form-group row">
	<!-- Dot Valorperdidadano Field -->
	<label for="dot_valorperdidadano" class="col-md-3 col-form-label text-md-right">{{ __('Valor perdida o daño') }}</label>
	<div class="form-group col-sm-6">
		{!! Form::number('dot_valorperdidadano', null, ['class' => 'form-control']) !!}
		
		@if ($errors->has('name'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('dot_valorperdidadano') }}</strong>
			</span>
		@endif
	</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('dotacions.index') !!}" class="btn btn-outline-danger"><i class="ft-x"></i>Cancelar</a>
	</div>
</div>