<div class="row">
	<!-- Ser Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ser_nombre', 'Ser Nombre:') !!}
    {!! Form::text('ser_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Ser Valunitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ser_valunitario', 'Ser Valunitario:') !!}
    {!! Form::number('ser_valunitario', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('servicios.index') !!}" class="btn btn-default">Cancelar</a>
	</div>
</div>