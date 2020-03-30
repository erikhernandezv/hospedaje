<div class="form-group row">
	<!-- Eps Nombre Field -->
	<label for="eps_nombre" class="col-md-3 col-form-label text-md-right">{{ __('Nombre Eps') }}</label>

	<div class="form-group col-sm-8">
		{!! Form::text('eps_nombre', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('eps.index') !!}" class="btn btn-default">Cancelar</a>
	</div>
</div>