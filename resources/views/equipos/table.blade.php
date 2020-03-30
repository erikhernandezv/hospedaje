<div class="table-responsive">
    <table class="table" id="equipos-table">
        <thead>
            <tr>
                <th>Equ Nombre</th>
        <th>Equ Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($equipos as $equipos)
            <tr>
                <td>{!! $equipos->equ_nombre !!}</td>
            <td>{!! $equipos->equ_descripcion !!}</td>
                <td>
                    {!! Form::open(['route' => ['equipos.destroy', $equipos->equ_consecutivo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('equipos.show', [$equipos->equ_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('equipos.edit', [$equipos->equ_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
