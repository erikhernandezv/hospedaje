@extends('layouts.app')

@section('titulopanelprincipal')
Adicionar permisos a Roles
@endsection

@section('titulosecundario')
Adicionar permisos a rol - {{ $display_name }}
@endsection

@section('add')
    <li>
        <a href="#" data-toggle="modal" data-target="#myModal"><span class="notification-tag badge badge-default badge-danger float-right m-0">Adicionar</span></a>

    </li>
@endsection

@section('content')

<div class="modal" tabindex="-1" id='myModal' role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Adicionar permiso</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Por favor seleccione un permiso.</p>
        
        <div id="dataSelect"></div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" id='save'>Guardar</button>
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

	<div class="col-sm-12 table-responsive">
		<table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
			<thead>
				<tr role="row">
					<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 20%;" aria-sort="ascending">Permiso</th>
					<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 30%;">Nombre descriptivo</th>
					<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50%;">Descripción</th>
					<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 10%;">Acción</th>
				</tr>
			</thead>
			<tbody>

			@foreach($permissions as $permisos)
			<tr>
				<td>{!! $permisos->name !!}{!! $permisos->id !!}</td>
            	<td>{!! $permisos->display_name !!}</td>
            	<td>{!! $permisos->description !!}</td>
            	<td>
                  {!! Form::open(['route' => ['permissions.delete', $permisos->ids, $rol], 'method' => 'delete','style' => 'margin-bottom: 0px;']) !!}
            
                  {!! Form::button('<i class="ft-x"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger', 'title' => 'Eliminar registro', 'onclick' => "return confirm('Está seguro que desea eliminar el registro?')"]) !!}
                  {!! Form::close() !!}
                </td>
            <tr>
			@endforeach
			</tbody>
		</table>
	</div>

	<!--@ include('adminlte-templates::common.paginate', ['records' => $permissions ])-->

	<div class="form-group row mb-0">
		<div class="col-md-12 text-right">
			<a href="{!! route('roles.index') !!}" class="btn btn-outline-danger">
				<i class="ft-skip-back"></i> Atras
			</a>
		</div>
	</div>
@endsection

@section('scripts')
	$('#myModal').on('shown.bs.modal', function (e) {
	  $('#myInput').trigger('focus');
	  addElementSelect();
	  loadDataPermissions(e);
	})

	addElementSelect = function(){
		$('#dataSelect').empty();
		$('#dataSelect').append("<select class='form-control dynamic' id='dataLoad' name='dataLoad'><option value='0' disabled='true' selected='true'>Permisos</option></select>");
	};

	loadDataPermissions = function(e){
		e.preventDefault();

        $.get('{!!route('permissions.getpermissions',$rol)!!}',function(data) {
	      $.each(data, function(fetch, dataStore){
	        $('#dataLoad').append('<option value="'+ dataStore.id +'">'+ dataStore.display_name +'</option>');
	      })
	    });
	};

	$('#save').on('click', function(){
		$.ajax({
                data:  {
	                "_token": "{{ csrf_token() }}",
	                "permiso":$('#dataLoad').val(),
	                "rol":{{$rol}}
	            },
                url:   '{!!route('permissions.store')!!}',
                type:  'post',
                beforeSend: function () {
                        $("#dataLoad").html("Procesando, espere por favor...");
                },
                success:  function (data) {

                    var dhtml="";
                        for (datas in data.datos) {
                          dhtml+=' <p> Nombre: '+data.datos[datas].login+'</p>';
                        };
                    location.reload();
                    //$("#dataLoad").html(data.resultado + " "+ data.sms+" "+dhtml);
                }
        });
	});
@endsection