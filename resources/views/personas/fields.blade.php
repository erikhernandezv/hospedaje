<div class="form-group row" style="margin-bottom: 0px;">
    <label for="per_nombre1" class="col-md-3 col-form-label text-md-right">{{ __('Primer nombre') }}</label>

    <div class="form-group col-sm-8">
        {!! Form::text('per_nombre1', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="per_nombre2" class="col-md-3 col-form-label text-md-right">{{ __('Segundo nombre') }}</label>

    <div class="form-group col-sm-8">
        {!! Form::text('per_nombre2', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="per_apellido1" class="col-md-3 col-form-label text-md-right">{{ __('Primer apellido') }}</label>

    <div class="form-group col-sm-8">
        {!! Form::text('per_apellido1', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="per_apellido2" class="col-md-3 col-form-label text-md-right">{{ __('Segundo apellido') }}</label>

    <div class="form-group col-sm-8">
        {!! Form::text('per_apellido2', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="per_tipdoc" class="col-md-3 col-form-label text-md-right">{{ __('Tipo de documento') }}</label>

    <div class="form-group col-sm-4">
        {!! Form::select('per_tipdoc', array('RC' => 'Registro Civil', 'TI' => 'Tarjeta de Identidad', 'CC' => 'Cécula de Ciudadanía', 'CE' => 'Cédula de Extranjería'), null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="per_numdoc" class="col-md-3 col-form-label text-md-right">{{ __('Numero de documento') }}</label>

    <div class="form-group col-sm-4">
        {!! Form::text('per_numdoc', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="per_direccion" class="col-md-3 col-form-label text-md-right">{{ __('Dirección') }}</label>

    <div class="form-group col-sm-8">
        {!! Form::text('per_direccion', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="per_telefono" class="col-md-3 col-form-label text-md-right">{{ __('Teléfono') }}</label>

    <div class="form-group col-sm-4">
        {!! Form::number('per_telefono', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row" style="margin-bottom: 0px;">
    <label for="per_idmunicipio" class="col-md-3 col-form-label text-md-right">{{ __('Municipio') }}</label>

    <div class="form-group col-sm-8">
    @inject('inMunicipioController','App\Http\Controllers\municipioController')
        {!! Form::select('municipio', $inMunicipioController->cargarMunicipio(), null, ['id' => 'municipio', 'class' => 'form-control input-sm required select2', 'data-placeholder'=>'Seleccione el municipio']) !!}
    </div>

</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('personas.index') !!}" class="btn btn-outline-danger"><i class="ft-x"></i>Cancelar</a>
	</div>
</div>