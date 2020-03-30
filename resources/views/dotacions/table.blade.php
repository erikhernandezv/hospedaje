@if(isset($dotacions))
  <div class="col-sm-12 table-responsive">

    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

        <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 25%;" aria-sort="ascending">Detalle</th>
                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 25%;">Valor perdida o daño</th>
                <th  class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 25%;">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dotacions as $dotacion)
            <tr class="border-bottom-info border-custom-color">
                <td>{!! $dotacion->dot_detalle !!}</td>
                <td>{!! $dotacion->dot_valorperdidadano !!}</td>
                <td>
                    {!! Form::open(['route' => ['dotacions.destroy', $dotacion->dot_consecutivo], 'method' => 'delete','style' => 'margin-bottom: 0px;']) !!}
                        <a href="{!! route('dotacions.show', [$dotacion->dot_consecutivo]) !!}" class='btn btn-outline-info'><i class="ft-eye"></i></a>
                        <a href="{!! route('dotacions.edit', [$dotacion->dot_consecutivo]) !!}" class='btn btn-outline-dark btn-xs'><i class="ft-edit"></i></a>
                        {!! Form::button('<i class="ft-x"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger', 'onclick' => "return confirm('Está seguro que desea eliminar el registro?')"]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('adminlte-templates::common.paginate', ['records' => $dotacions ])

@endif