<div class="table-responsive">
    <table class="table" id="dotacions-table">
        <thead>
            <tr>
                <th>Dot Detalle</th>
        <th>Dot Valorperdidadano</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dotacions as $dotacion)
            <tr>
                <td>{!! $dotacion->dot_detalle !!}</td>
            <td>{!! $dotacion->dot_valorperdidadano !!}</td>
                <td>
                    {!! Form::open(['route' => ['dotacions.destroy', $dotacion->dot_consecutivo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('dotacions.show', [$dotacion->dot_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('dotacions.edit', [$dotacion->dot_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
