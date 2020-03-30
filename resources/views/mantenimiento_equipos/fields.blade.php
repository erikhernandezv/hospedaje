<div class="row">
	<!-- Meq Idequipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meq_idequipo', 'Meq Idequipo:') !!}
    {!! Form::number('meq_idequipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Meq Programada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meq_programada', 'Meq Programada:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('meq_programada', 0) !!}
        {!! Form::checkbox('meq_programada', '1', null) !!} 1
    </label>
</div>

<!-- Meq Fechaprogramada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meq_fechaprogramada', 'Meq Fechaprogramada:') !!}
    {!! Form::date('meq_fechaprogramada', null, ['class' => 'form-control','id'=>'meq_fechaprogramada']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#meq_fechaprogramada').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Med Ejecutada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('med_ejecutada', 'Med Ejecutada:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('med_ejecutada', 0) !!}
        {!! Form::checkbox('med_ejecutada', '1', null) !!} 1
    </label>
</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('mantenimientoEquipos.index') !!}" class="btn btn-default">Cancelar</a>
	</div>
</div>