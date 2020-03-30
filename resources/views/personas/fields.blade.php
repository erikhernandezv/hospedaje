<div class="row">
	<!-- Per Nombre1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_nombre1', 'Per Nombre1:') !!}
    {!! Form::text('per_nombre1', null, ['class' => 'form-control']) !!}
</div>

<!-- Per Nombre2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_nombre2', 'Per Nombre2:') !!}
    {!! Form::text('per_nombre2', null, ['class' => 'form-control']) !!}
</div>

<!-- Per Apellido1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_apellido1', 'Per Apellido1:') !!}
    {!! Form::text('per_apellido1', null, ['class' => 'form-control']) !!}
</div>

<!-- Per Apellido2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_apellido2', 'Per Apellido2:') !!}
    {!! Form::text('per_apellido2', null, ['class' => 'form-control']) !!}
</div>

<!-- Per Tipdoc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_tipdoc', 'Per Tipdoc:') !!}
    {!! Form::number('per_tipdoc', null, ['class' => 'form-control']) !!}
</div>

<!-- Per Numdoc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_numdoc', 'Per Numdoc:') !!}
    {!! Form::text('per_numdoc', null, ['class' => 'form-control']) !!}
</div>

<!-- Per Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_direccion', 'Per Direccion:') !!}
    {!! Form::text('per_direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Per Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_telefono', 'Per Telefono:') !!}
    {!! Form::text('per_telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Per Idmunicipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('per_idmunicipio', 'Per Idmunicipio:') !!}
    {!! Form::number('per_idmunicipio', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('personas.index') !!}" class="btn btn-default">Cancelar</a>
	</div>
</div>