@if(isset($personas))
<div class="col-sm-12 table-responsive">

<table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

        <thead>
            <tr>
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 25%" aria-sort="ascending">Nombres</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 25%">Apellidos</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 5%">Tipo y numero de documento</th>
                <!--<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 10%">Numero de documento</th>-->
                <!--<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 15%">Dirección</th>-->
                <th  class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 20%">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($personas as $persona)
            <tr>
                <td>{!! $persona->per_nombre1.' '.$persona->per_nombre2 !!}</td>
                <td>{!! $persona->per_apellido1.' '.$persona->per_apellido2 !!}</td>
                <td>{!! $persona->per_tipdoc.' '.$persona->per_numdoc !!}</td>
                <td>
                    {!! Form::open(['route' => ['personas.destroy', $persona->per_consecutivo], 'method' => 'delete']) !!}
                        <a href="{!! route('personas.show', [$persona->per_consecutivo]) !!}" class='btn btn-outline-info'><i class="ft-eye"></i></a>
                        <a href="{!! route('personas.edit', [$persona->per_consecutivo]) !!}" class='btn btn-outline-dark btn-xs'><i class="ft-edit"></i></a>
                        {!! Form::button('<i class="ft-x"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger', 'onclick' => "return confirm('Está seguro que desea eliminar el registro?')"]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('adminlte-templates::common.paginate', ['records' => $personas ])

@endif