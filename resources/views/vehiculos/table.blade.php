<div class="table-responsive">
    <table class="table" id="vehiculos-table">
        <thead>
            <tr>
                <th>Vei Marca</th>
        <th>Vei Modelo</th>
        <th>Vei Placa</th>
        <th>Vei Numerochasis</th>
        <th>Vei Fecpoliza</th>
        <th>Vei Feclimitesoat</th>
        <th>Vei Feclimitetecnomecanica</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehiculos as $vehiculos)
            <tr>
                <td>{!! $vehiculos->vei_marca !!}</td>
            <td>{!! $vehiculos->vei_modelo !!}</td>
            <td>{!! $vehiculos->vei_placa !!}</td>
            <td>{!! $vehiculos->vei_numerochasis !!}</td>
            <td>{!! $vehiculos->vei_fecpoliza !!}</td>
            <td>{!! $vehiculos->vei_feclimitesoat !!}</td>
            <td>{!! $vehiculos->vei_feclimitetecnomecanica !!}</td>
                <td>
                    {!! Form::open(['route' => ['vehiculos.destroy', $vehiculos->vei_consecutivo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('vehiculos.show', [$vehiculos->vei_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('vehiculos.edit', [$vehiculos->vei_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
