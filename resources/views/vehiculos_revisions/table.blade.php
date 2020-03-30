<div class="table-responsive">
    <table class="table" id="vehiculosRevisions-table">
        <thead>
            <tr>
                <th>Vre Idvehiculo</th>
        <th>Vre Fecha</th>
        <th>Vre Klms</th>
        <th>Vre Fectanqueo</th>
        <th>Vre Revisionaguaobservacion</th>
        <th>Vre Revisionllantasobserva</th>
        <th>Vre Revisionfrenosobserva</th>
        <th>Vre Revisionaceiteobserva</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehiculosRevisions as $vehiculosRevision)
            <tr>
                <td>{!! $vehiculosRevision->vre_idvehiculo !!}</td>
            <td>{!! $vehiculosRevision->vre_fecha !!}</td>
            <td>{!! $vehiculosRevision->vre_klms !!}</td>
            <td>{!! $vehiculosRevision->vre_fectanqueo !!}</td>
            <td>{!! $vehiculosRevision->vre_revisionaguaobservacion !!}</td>
            <td>{!! $vehiculosRevision->vre_revisionllantasobserva !!}</td>
            <td>{!! $vehiculosRevision->vre_revisionfrenosobserva !!}</td>
            <td>{!! $vehiculosRevision->vre_revisionaceiteobserva !!}</td>
                <td>
                    {!! Form::open(['route' => ['vehiculosRevisions.destroy', $vehiculosRevision->vre_consecutivo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('vehiculosRevisions.show', [$vehiculosRevision->vre_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('vehiculosRevisions.edit', [$vehiculosRevision->vre_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
