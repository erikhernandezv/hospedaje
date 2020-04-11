<div class="form-group row" style="margin-bottom: 0px;">
    <label for="ser_nombre" class="col-md-3 col-form-label text-md-right">{{ __('Nombre') }}</label>

    <div class="form-group col-sm-8">
    	{!! Form::text('ser_nombre', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="ser_valunitario" class="col-md-3 col-form-label text-md-right">{{ __('Valor unitario') }}</label>

    <div class="form-group col-sm-8">
    	{!! Form::number('ser_valunitario', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('servicios.index') !!}" class="btn btn-outline-danger"><i class="ft-x"></i>Cancelar</a>
	</div>
</div>