<div class="col-sm-12 table-responsive">

    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

      <thead>
        <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 25%;" aria-sort="ascending">Identificador</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 25%;">Nombre</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 25%;">Correo electrónico</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 25%;">Fecha creación</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-bottom-info border-custom-color">
          <td>{!! $usuarios->id !!}</td>
          <td>{!! $usuarios->name !!}</td>
          <td>{!! $usuarios->email !!}</td>
          <td>{!! $usuarios->created_at !!}</td>
        </tr>
      </tbody>
    </table>
</div>