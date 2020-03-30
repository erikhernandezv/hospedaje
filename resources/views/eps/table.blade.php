@if(isset($eps))
  <div class="col-sm-12 table-responsive">

    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

        <thead>
            <tr>
              <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 75%;" aria-sort="ascending">Nombre Eps</th>
              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 25%;">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($eps as $epss)
            <tr class="border-bottom-info border-custom-color">
                <td>{!! $epss->eps_nombre !!}</td>
                <td>
                    {!! Form::open(['route' => ['eps.destroy', $epss->eps_consecutivo], 'method' => 'delete']) !!}
                        <a href="{!! route('eps.show', [$epss->eps_consecutivo]) !!}" class='btn btn-outline-info'><i class="ft-eye"></i></a>
                        <a href="{!! route('eps.edit', [$epss->eps_consecutivo]) !!}" class='btn btn-outline-dark btn-xs'><i class="ft-edit"></i></a>
                        {!! Form::button('<i class="ft-x"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger', 'onclick' => "return confirm('Está seguro que desea eliminar el registro?')"]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('adminlte-templates::common.paginate', ['records' => $eps ])

@endif