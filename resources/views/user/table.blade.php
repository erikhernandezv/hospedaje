@if(isset($usuarios))
  <div class="col-sm-12 table-responsive">

    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

      <thead>
        <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 25%;" aria-sort="ascending">Identificador</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 25%;">Nombre</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 25%;">Correo electrónico</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 25%;">Action</th>
        </tr>
      </thead>
        <tbody>
          @foreach($usuarios as $usuario)
          <tr class="border-bottom-info border-custom-color">
            <td>{!! $usuario->id !!}</td>
            <td>{!! $usuario->name !!}</td>
            <td>{!! $usuario->email !!}</td>
            <td>
              {!! Form::open(['route' => ['users.destroy', $usuario->id], 'method' => 'delete','style' => 'margin-bottom: 0px;']) !!}
                <a href="{!! route('users.show', [$usuario->id]) !!}" class='btn btn-outline-info'><i class="ft-eye"></i></a>
                <a href="{!! route('users.edit', [$usuario->id]) !!}" class='btn btn-outline-dark btn-xs'><i class="ft-edit"></i></a>
                {!! Form::button('<i class="ft-x"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger', 'onclick' => "return confirm('Está seguro que desea eliminar el registro?')"]) !!}
              {!! Form::close() !!}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

@include('adminlte-templates::common.paginate', ['records' => $usuarios ])

@endif