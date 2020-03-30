<div class="row">
	<!-- Dot Detalle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dot_detalle', 'Dot Detalle:') !!}
    {!! Form::text('dot_detalle', null, ['class' => 'form-control']) !!}
</div>

<!-- Dot Valorperdidadano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dot_valorperdidadano', 'Dot Valorperdidadano:') !!}
    {!! Form::number('dot_valorperdidadano', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('dotacions.index') !!}" class="btn btn-default">Cancelar</a>
	</div>
</div>