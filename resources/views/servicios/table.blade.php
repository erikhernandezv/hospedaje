@if(isset($servicios))
<div class="col-sm-12 table-responsive">

<table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

        <thead>
            <tr>
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 40%" aria-sort="ascending">Nombre</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 25%">Valor unitario</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 30%">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicio)
            <tr>
                <td>{!! $servicio->ser_nombre !!}</td>
                <td>{!! $servicio->ser_valunitario !!}</td>
                <td>
                    {!! Form::open(['route' => ['servicios.destroy', $servicio->ser_consecutivo], 'method' => 'delete']) !!}
                        <a href="{!! route('servicios.show', [$servicio->ser_consecutivo]) !!}" class='btn btn-outline-info'><i class="ft-eye"></i></a>
                        <a href="{!! route('servicios.edit', [$servicio->ser_consecutivo]) !!}" class='btn btn-outline-dark btn-xs'><i class="ft-edit"></i></a>
                        {!! Form::button('<i class="ft-x"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger', 'onclick' => "return confirm('Está seguro que desea eliminar el registro?')"]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('adminlte-templates::common.paginate', ['records' => $servicios ])

@endif