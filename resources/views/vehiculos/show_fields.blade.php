<div class="col-sm-12 table-responsive">

    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

      <thead>
        <tr role="row">
        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 8%;" aria-sort="ascending">Identificador</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Marca</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 25%;">Modelo</th>

          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Placa</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 25%;">Número chasis</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Fecha poliza</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 25%;">Fecha limite soat</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Fecha limite tecno-mecánica</th>

          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 22%;">Fecha creación</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 16%;">Última actualización</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-bottom-info border-custom-color">
            <td>{!! $vehiculos->vei_consecutivo !!}</td>
            <td>{!! $vehiculos->vei_marca !!}</td>
            <td>{!! $vehiculos->vei_modelo !!}</td>
            <td>{!! $vehiculos->vei_placa !!}</td>
            <td>{!! $vehiculos->vei_numerochasis !!}</td>
            <td>{!! $vehiculos->vei_fecpoliza !!}</td>
            <td>{!! $vehiculos->vei_feclimitesoat !!}</td>
            <td>{!! $vehiculos->vei_feclimitetecnomecanica !!}</td>

            <td>{!! $vehiculos->created_at !!}</td>
            <td>{!! $vehiculos->updated_at !!}</td>
        </tr>
      </tbody>
    </table>
</div>
