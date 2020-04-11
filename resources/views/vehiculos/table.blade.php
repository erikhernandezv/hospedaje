@if(isset($vehiculos))
<div class="col-sm-12 table-responsive">

<table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

        <thead>
            <tr>
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 15%" aria-sort="ascending">Marca</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 20%">Modelo</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 10%">Placa</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 10%">Número de chasis</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 10%">Fecha poliza</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 10%">Fecha limite soat</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 10%">Fecha limite tecno-mecánica</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 40%">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehiculos as $vehiculo)
            <tr>
                <td>{!! $vehiculo->vei_marca !!}</td>
                <td>{!! $vehiculo->vei_modelo !!}</td>
                <td>{!! $vehiculo->vei_placa !!}</td>
                <td>{!! $vehiculo->vei_numerochasis !!}</td>
                <td>{!! $vehiculo->vei_fecpoliza !!}</td>
                <td>{!! $vehiculo->vei_feclimitesoat !!}</td>
                <td>{!! $vehiculo->vei_feclimitetecnomecanica !!}</td>
                <td>
                    {!! Form::open(['route' => ['vehiculos.destroy', $vehiculo->ser_consecutivo], 'method' => 'delete']) !!}
                        <a href="{!! route('vehiculos.show', [$vehiculo->vei_consecutivo]) !!}" class='btn btn-outline-info'><i class="ft-eye"></i></a>
                        <a href="{!! route('vehiculos.edit', [$vehiculo->vei_consecutivo]) !!}" class='btn btn-outline-dark btn-xs'><i class="ft-edit"></i></a>
                        {!! Form::button('<i class="ft-x"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger', 'onclick' => "return confirm('Está seguro que desea eliminar el registro?')"]) !!}
                    
                        
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('adminlte-templates::common.paginate', ['records' => $vehiculos ])

@endif
