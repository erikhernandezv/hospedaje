<div class="col-sm-12 table-responsive">

    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

      <thead>
        <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 5%;" aria-sort="ascending">Identificador</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 25%;">Nombre Equipo</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 34%;">Descripción Equipo</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 22%;">Fecha creación</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 16%;">Última actualización</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-bottom-info border-custom-color">
          <td>{!! $equipos->equ_consecutivo !!}</td>
          <td>{!! $equipos->equ_nombre !!}</td>
          <td>{!! $equipos->equ_descripcion !!}</td>
          <td>{!! $equipos->created_at !!}</td>
          <td>{!! $equipos->updated_at !!}</td>
        </tr>
      </tbody>
    </table>
</div>