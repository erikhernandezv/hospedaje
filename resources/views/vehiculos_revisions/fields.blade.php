<div class="row">
	<!-- Vre Idvehiculo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vre_idvehiculo', 'Vre Idvehiculo:') !!}
    {!! Form::number('vre_idvehiculo', null, ['class' => 'form-control']) !!}
</div>

<!-- Vre Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vre_fecha', 'Vre Fecha:') !!}
    {!! Form::date('vre_fecha', null, ['class' => 'form-control','id'=>'vre_fecha']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#vre_fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Vre Klms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vre_klms', 'Vre Klms:') !!}
    {!! Form::number('vre_klms', null, ['class' => 'form-control']) !!}
</div>

<!-- Vre Fectanqueo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vre_fectanqueo', 'Vre Fectanqueo:') !!}
    {!! Form::date('vre_fectanqueo', null, ['class' => 'form-control','id'=>'vre_fectanqueo']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#vre_fectanqueo').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Vre Revisionaguaobservacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vre_revisionaguaobservacion', 'Vre Revisionaguaobservacion:') !!}
    {!! Form::text('vre_revisionaguaobservacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Vre Revisionllantasobserva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vre_revisionllantasobserva', 'Vre Revisionllantasobserva:') !!}
    {!! Form::text('vre_revisionllantasobserva', null, ['class' => 'form-control']) !!}
</div>

<!-- Vre Revisionfrenosobserva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vre_revisionfrenosobserva', 'Vre Revisionfrenosobserva:') !!}
    {!! Form::text('vre_revisionfrenosobserva', null, ['class' => 'form-control']) !!}
</div>

<!-- Vre Revisionaceiteobserva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vre_revisionaceiteobserva', 'Vre Revisionaceiteobserva:') !!}
    {!! Form::text('vre_revisionaceiteobserva', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('vehiculosRevisions.index') !!}" class="btn btn-default">Cancelar</a>
	</div>
</div>