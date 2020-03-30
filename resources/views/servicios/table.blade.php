<div class="table-responsive">
    <table class="table" id="servicios-table">
        <thead>
            <tr>
                <th>Ser Nombre</th>
        <th>Ser Valunitario</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicio)
            <tr>
                <td>{!! $servicio->ser_nombre !!}</td>
            <td>{!! $servicio->ser_valunitario !!}</td>
                <td>
                    {!! Form::open(['route' => ['servicios.destroy', $servicio->ser_consecutivo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('servicios.show', [$servicio->ser_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('servicios.edit', [$servicio->ser_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
