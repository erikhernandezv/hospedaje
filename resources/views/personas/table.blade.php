<div class="table-responsive">
    <table class="table" id="personas-table">
        <thead>
            <tr>
                <th>Per Nombre1</th>
        <th>Per Nombre2</th>
        <th>Per Apellido1</th>
        <th>Per Apellido2</th>
        <th>Per Tipdoc</th>
        <th>Per Numdoc</th>
        <th>Per Direccion</th>
        <th>Per Telefono</th>
        <th>Per Idmunicipio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($personas as $persona)
            <tr>
                <td>{!! $persona->per_nombre1 !!}</td>
            <td>{!! $persona->per_nombre2 !!}</td>
            <td>{!! $persona->per_apellido1 !!}</td>
            <td>{!! $persona->per_apellido2 !!}</td>
            <td>{!! $persona->per_tipdoc !!}</td>
            <td>{!! $persona->per_numdoc !!}</td>
            <td>{!! $persona->per_direccion !!}</td>
            <td>{!! $persona->per_telefono !!}</td>
            <td>{!! $persona->per_idmunicipio !!}</td>
                <td>
                    {!! Form::open(['route' => ['personas.destroy', $persona->per_consecutivo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('personas.show', [$persona->per_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('personas.edit', [$persona->per_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
