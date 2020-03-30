<div class="row">
	<!-- Caj Idcuidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('caj_idcuidad', 'Caj Idcuidad:') !!}
    {!! Form::number('caj_idcuidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Caj Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('caj_fecha', 'Caj Fecha:') !!}
    {!! Form::date('caj_fecha', null, ['class' => 'form-control','id'=>'caj_fecha']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#caj_fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Caj Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('caj_valor', 'Caj Valor:') !!}
    {!! Form::number('caj_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Caj Pagadoa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('caj_pagadoa', 'Caj Pagadoa:') !!}
    {!! Form::number('caj_pagadoa', null, ['class' => 'form-control']) !!}
</div>

<!-- Caj Concepto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('caj_concepto', 'Caj Concepto:') !!}
    {!! Form::text('caj_concepto', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('cajamenors.index') !!}" class="btn btn-default">Cancelar</a>
	</div>
</div>