<!-- Name Field -->
<div class="row">
	<div class="form-group col-sm-6">
	    {!! Form::label('name', 'Nombre:') !!}
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Display Name Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('display_name', 'Nombre descriptivo:') !!}
	    {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="row">
	<!-- Description Field -->
	<div class="form-group col-sm-12">
	    {!! Form::label('description', 'Descripción:') !!}
	    {!! Form::text('description', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('roles.index') !!}" class="btn btn-outline-danger"><i class="ft-x"></i>Cancelar</a>
	</div>
</div>
