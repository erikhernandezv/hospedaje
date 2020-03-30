<div class="table-responsive">
    <table class="table" id="ingresos-table">
        <thead>
            <tr>
                <th>Ing Idpersona</th>
        <th>Ing Habitacionasignada</th>
        <th>Ing Horaingreso</th>
        <th>Ing Ideps</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ingresos as $ingresos)
            <tr>
                <td>{!! $ingresos->ing_idpersona !!}</td>
            <td>{!! $ingresos->ing_habitacionasignada !!}</td>
            <td>{!! $ingresos->ing_horaingreso !!}</td>
            <td>{!! $ingresos->ing_ideps !!}</td>
                <td>
                    {!! Form::open(['route' => ['ingresos.destroy', $ingresos->ing_consecutivo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('ingresos.show', [$ingresos->ing_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('ingresos.edit', [$ingresos->ing_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
