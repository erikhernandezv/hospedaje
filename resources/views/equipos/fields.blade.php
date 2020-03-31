<div class="form-group row">
	<!-- Equ Nombre Field -->
	<label for="equ_nombre" class="col-md-3 col-form-label text-md-right">{{ __('Nombre Equipo') }}</label>

	<div class="form-group col-sm-6">
		{!! Form::text('equ_nombre', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group row">
	<!-- Equ Descripcion Field -->
	<label for="equ_descripcion" class="col-md-3 col-form-label text-md-right">{{ __('Descripción Equipo') }}</label>

	<div class="form-group col-sm-8">
		{!! Form::text('equ_descripcion', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('equipos.index') !!}" class="btn btn-outline-danger"><i class="ft-x"></i>Cancelar</a>
	</div>
</div>