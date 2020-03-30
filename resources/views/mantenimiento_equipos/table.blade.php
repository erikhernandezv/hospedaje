<div class="table-responsive">
    <table class="table" id="mantenimientoEquipos-table">
        <thead>
            <tr>
                <th>Meq Idequipo</th>
        <th>Meq Programada</th>
        <th>Meq Fechaprogramada</th>
        <th>Med Ejecutada</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mantenimientoEquipos as $mantenimientoEquipos)
            <tr>
                <td>{!! $mantenimientoEquipos->meq_idequipo !!}</td>
            <td>{!! $mantenimientoEquipos->meq_programada !!}</td>
            <td>{!! $mantenimientoEquipos->meq_fechaprogramada !!}</td>
            <td>{!! $mantenimientoEquipos->med_ejecutada !!}</td>
                <td>
                    {!! Form::open(['route' => ['mantenimientoEquipos.destroy', $mantenimientoEquipos->meq_consecutivo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('mantenimientoEquipos.show', [$mantenimientoEquipos->meq_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('mantenimientoEquipos.edit', [$mantenimientoEquipos->meq_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
