<div class="table-responsive">
    <table class="table" id="cajamenors-table">
        <thead>
            <tr>
                <th>Caj Idcuidad</th>
        <th>Caj Fecha</th>
        <th>Caj Valor</th>
        <th>Caj Pagadoa</th>
        <th>Caj Concepto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cajamenors as $cajamenor)
            <tr>
                <td>{!! $cajamenor->caj_idcuidad !!}</td>
            <td>{!! $cajamenor->caj_fecha !!}</td>
            <td>{!! $cajamenor->caj_valor !!}</td>
            <td>{!! $cajamenor->caj_pagadoa !!}</td>
            <td>{!! $cajamenor->caj_concepto !!}</td>
                <td>
                    {!! Form::open(['route' => ['cajamenors.destroy', $cajamenor->caj_consecutivo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('cajamenors.show', [$cajamenor->caj_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('cajamenors.edit', [$cajamenor->caj_consecutivo]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
