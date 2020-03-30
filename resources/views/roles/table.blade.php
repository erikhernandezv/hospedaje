  <div class="col-sm-12 table-responsive">

    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

      <thead>
        <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 25%;" aria-sort="ascending">Name</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 25%;">Nombre a mostrar</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 25%;">Description</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 25%;">Acción</th>
        </tr>
      </thead>

        <tbody>
        @foreach($roles as $rol)
            <tr>
                <td>{!! $rol->name !!}</td>
            <td>{!! $rol->display_name !!}</td>
            <td>{!! $rol->description !!}</td>
                <td>
                  {!! Form::open(['route' => ['roles.destroy', $rol->id], 'method' => 'delete','style' => 'margin-bottom: 0px;']) !!}
                    <a href="{!! route('roles.show', [$rol->id]) !!}" title="Ver más información" class='btn btn-outline-info'><i class="ft-eye"></i></a>
                    <a href="{!! route('roles.edit', [$rol->id]) !!}" title="Editar registro" class='btn btn-outline-dark btn-xs'><i class="ft-edit"></i></a>

                    <a href="{!! route('roles.permisos', [$rol->id]) !!}" title="Gestionar permisos" class='btn btn-outline-dark btn-xs'><i class="ft-upload"></i></a>
                    

                    {!! Form::button('<i class="ft-x"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger', 'title' => 'Eliminar registro', 'onclick' => "return confirm('Está seguro que desea eliminar el registro?')"]) !!}
                  {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('adminlte-templates::common.paginate', ['records' => $roles ])