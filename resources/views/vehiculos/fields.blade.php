<div class="row">
	<!-- Vei Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vei_marca', 'Vei Marca:') !!}
    {!! Form::text('vei_marca', null, ['class' => 'form-control']) !!}
</div>

<!-- Vei Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vei_modelo', 'Vei Modelo:') !!}
    {!! Form::text('vei_modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Vei Placa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vei_placa', 'Vei Placa:') !!}
    {!! Form::text('vei_placa', null, ['class' => 'form-control']) !!}
</div>

<!-- Vei Numerochasis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vei_numerochasis', 'Vei Numerochasis:') !!}
    {!! Form::text('vei_numerochasis', null, ['class' => 'form-control']) !!}
</div>

<!-- Vei Fecpoliza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vei_fecpoliza', 'Vei Fecpoliza:') !!}
    {!! Form::date('vei_fecpoliza', null, ['class' => 'form-control','id'=>'vei_fecpoliza']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#vei_fecpoliza').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Vei Feclimitesoat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vei_feclimitesoat', 'Vei Feclimitesoat:') !!}
    {!! Form::date('vei_feclimitesoat', null, ['class' => 'form-control','id'=>'vei_feclimitesoat']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#vei_feclimitesoat').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Vei Feclimitetecnomecanica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vei_feclimitetecnomecanica', 'Vei Feclimitetecnomecanica:') !!}
    {!! Form::date('vei_feclimitetecnomecanica', null, ['class' => 'form-control','id'=>'vei_feclimitetecnomecanica']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#vei_feclimitetecnomecanica').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('vehiculos.index') !!}" class="btn btn-default">Cancelar</a>
	</div>
</div>