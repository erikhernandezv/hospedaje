<div class="form-group row" style="margin-bottom: 0px;">
    <label for="vei_marca" class="col-md-3 col-form-label text-md-right">{{ __('Marca') }}</label>

    <div class="form-group col-sm-8">
        {!! Form::text('vei_marca', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="vei_modelo" class="col-md-3 col-form-label text-md-right">{{ __('Modelo') }}</label>

    <div class="form-group col-sm-8">
        {!! Form::text('vei_modelo', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="vei_placa" class="col-md-3 col-form-label text-md-right">{{ __('Placa') }}</label>

    <div class="form-group col-sm-4">
        {!! Form::text('vei_placa', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="vei_numerochasis" class="col-md-3 col-form-label text-md-right">{{ __('Numero de chasis') }}</label>

    <div class="form-group col-sm-6">
        {!! Form::text('vei_numerochasis', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="vei_fecpoliza" class="col-md-3 col-form-label text-md-right">{{ __('Fecha finalización de poliza') }}</label>

    <div class="form-group col-sm-4">
        {!! Form::date('vei_fecpoliza', null, ['class' => 'form-control','id'=>'vei_fecpoliza']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="vei_feclimitesoat" class="col-md-3 col-form-label text-md-right">{{ __('Fecha limite soat') }}</label>

    <div class="form-group col-sm-4">
        {!! Form::date('vei_feclimitesoat', null, ['class' => 'form-control','id'=>'vei_feclimitesoat']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="vei_feclimitetecnomecanica" class="col-md-3 col-form-label text-md-right">{{ __('Fecha limite tecno-mecánica') }}</label>

    <div class="form-group col-sm-4">
    {!! Form::date('vei_feclimitetecnomecanica', null, ['class' => 'form-control','id'=>'vei_feclimitetecnomecanica']) !!}
    </div>
</div>

    @section('scripts')
    <script type="text/javascript">
        $('#vei_fecpoliza').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        });

        $('#vei_feclimitesoat').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        });

        $('#vei_feclimitetecnomecanica').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        });
    </script>
    @endsection

</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('vehiculos.index') !!}" class="btn btn-outline-danger"><i class="ft-x"></i>Cancelar</a>
	</div>
</div>