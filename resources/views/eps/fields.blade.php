<div class="row">
	<!-- Eps Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('eps_nombre', 'Eps Nombre:') !!}
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