<div class="row">
	<!-- Ing Idpersona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ing_idpersona', 'Ing Idpersona:') !!}
    {!! Form::number('ing_idpersona', null, ['class' => 'form-control']) !!}
</div>

<!-- Ing Habitacionasignada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ing_habitacionasignada', 'Ing Habitacionasignada:') !!}
    {!! Form::text('ing_habitacionasignada', null, ['class' => 'form-control']) !!}
</div>

<!-- Ing Horaingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ing_horaingreso', 'Ing Horaingreso:') !!}
    {!! Form::text('ing_horaingreso', null, ['class' => 'form-control']) !!}
</div>

<!-- Ing Ideps Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ing_ideps', 'Ing Ideps:') !!}
    {!! Form::number('ing_ideps', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('ingresos.index') !!}" class="btn btn-default">Cancelar</a>
	</div>
</div>