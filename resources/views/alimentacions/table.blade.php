<div class="table-responsive">
    <table class="table" id="alimentacions-table">
        <thead>
            <tr>
                <th>Ali Ideps</th>
        <th>Ali Autorizacion</th>
        <th>Ali Nropersonas</th>
        <th>Ali Desayunosautorizados</th>
        <th>Ali Almuerzosautorizados</th>
        <th>Ali Comidasautorizadas</th>
        <th>Ali Lugarentrega</th>
        <th>Ali Observaciones</th>
        <th>Ali Idingreso</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($alimentacions as $alimentacion)
            <tr>
                <td>{!! $alimentacion->ali_ideps !!}</td>
            <td>{!! $alimentacion->ali_autorizacion !!}</td>
            <td>{!! $alimentacion->ali_nropersonas !!}</td>
            <td>{!! $alimentacion->ali_desayunosautorizados !!}</td>
            <td>{!! $alimentacion->ali_almuerzosautorizados !!}</td>
            <td>{!! $alimentacion->ali_comidasautorizadas !!}</td>
            <td>{!! $alimentacion->ali_lugarentrega !!}</td>
            <td>{!! $alimentacion->ali_observaciones !!}</td>
            <td>{!! $alimentacion->ali_idingreso !!}</td>
                <td>
                    {!! Form::open(['route' => ['alimentacions.destroy', $alimentacion->ali_consecutivo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('alimentacions.show', [$alimentacion->ali_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('alimentacions.edit', [$alimentacion->ali_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
