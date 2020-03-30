<div class="row">
	<!-- Ali Ideps Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ali_ideps', 'Ali Ideps:') !!}
    {!! Form::number('ali_ideps', null, ['class' => 'form-control']) !!}
</div>

<!-- Ali Autorizacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ali_autorizacion', 'Ali Autorizacion:') !!}
    {!! Form::text('ali_autorizacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ali Nropersonas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ali_nropersonas', 'Ali Nropersonas:') !!}
    {!! Form::number('ali_nropersonas', null, ['class' => 'form-control']) !!}
</div>

<!-- Ali Desayunosautorizados Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ali_desayunosautorizados', 'Ali Desayunosautorizados:') !!}
    {!! Form::number('ali_desayunosautorizados', null, ['class' => 'form-control']) !!}
</div>

<!-- Ali Almuerzosautorizados Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ali_almuerzosautorizados', 'Ali Almuerzosautorizados:') !!}
    {!! Form::number('ali_almuerzosautorizados', null, ['class' => 'form-control']) !!}
</div>

<!-- Ali Comidasautorizadas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ali_comidasautorizadas', 'Ali Comidasautorizadas:') !!}
    {!! Form::number('ali_comidasautorizadas', null, ['class' => 'form-control']) !!}
</div>

<!-- Ali Lugarentrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ali_lugarentrega', 'Ali Lugarentrega:') !!}
    {!! Form::text('ali_lugarentrega', null, ['class' => 'form-control']) !!}
</div>

<!-- Ali Observaciones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ali_observaciones', 'Ali Observaciones:') !!}
    {!! Form::text('ali_observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Ali Idingreso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ali_idingreso', 'Ali Idingreso:') !!}
    {!! Form::number('ali_idingreso', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12 text-md-right">
	    <!--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}-->
	    <button type="submit" class="btn btn-outline-info"><i class="ft-save"></i>Guardar</button>
	    <a href="{!! route('alimentacions.index') !!}" class="btn btn-default">Cancelar</a>
	</div>
</div>