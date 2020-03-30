<div class="row">
	<!-- Equ Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equ_nombre', 'Equ Nombre:') !!}
    {!! Form::text('equ_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Equ Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equ_descripcion', 'Equ Descripcion:') !!}
    {!! Form::text('equ_descripcion', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('equipos.index') !!}" class="btn btn-default">Cancelar</a>
	</div>
</div>