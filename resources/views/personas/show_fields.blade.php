<div class="col-sm-12 table-responsive">

    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">

      <thead>
        <tr role="row">
        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 8%;" aria-sort="ascending">Identificador</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50%;">Nombres y apellidos</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 25%;">Tipo y número de documento</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 34%;">Dirección</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 34%;">Teléfono</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 34%;">Muncipio</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 22%;">Fecha creación</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 16%;">Última actualización</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-bottom-info border-custom-color">
          <td>{!! $persona->per_consecutivo !!}</td>
          <td>{!! $persona->per_nombre1.' '.$persona->per_nombre2.' '.$persona->per_apellido1.' '.$persona->per_apellido2 !!}</td>
          <td>{!! $persona->per_tipdoc.' '.$persona->per_numdoc !!}</td>
          <td>{!! $persona->per_direccion !!}</td>

          <td>{!! $persona->per_telefono !!}</td>
          <td>{!! $persona->municipios->mun_municipio !!}</td>

          <td>{!! $persona->created_at !!}</td>
          <td>{!! $persona->updated_at !!}</td>
        </tr>
      </tbody>
    </table>
</div>
