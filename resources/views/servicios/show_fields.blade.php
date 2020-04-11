<div class="col-sm-12 table-responsive">

    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

      <thead>
        <tr role="row">
        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 8%;" aria-sort="ascending">Identificador</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Nombre</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 25%;">Valor Unitario</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 22%;">Fecha creación</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 16%;">Última actualización</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-bottom-info border-custom-color">
        <td>{!! $servicio->ser_consecutivo !!}</td>
          <td>{!! $servicio->ser_nombre !!}</td>
          <td>{!! $servicio->ser_valunitario !!}</td>

          <td>{!! $servicio->created_at !!}</td>
          <td>{!! $servicio->updated_at !!}</td>
        </tr>
      </tbody>
    </table>
</div>
