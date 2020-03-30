<div class="table-responsive">
    <table class="table">
            <tr>
                <th scope="row">{!! Form::label('id', 'Identificador:') !!}</th>
                <td>{!! $roles->id !!}</td>
            </tr>
            <tr>
                <th scope="row">{!! Form::label('name', 'Nombre:') !!}</th>
                <td>{!! $roles->name !!}</td>
            </tr>
            <tr>
                <th scope="row">{!! Form::label('display_name', 'Nombre descriptivo:') !!}</th>
                <td>{!! $roles->display_name !!}</td>
            </tr>
            <tr>
                <th scope="row">{!! Form::label('description', 'Descripción:') !!}</th>
                <td>{!! $roles->description !!}</td>
            </tr>
            <tr>
                <th scope="row">{!! Form::label('created_at', 'Fecha creación:') !!}</th>
                <td>{!! $roles->created_at !!}</td>
            </tr>
            <tr>
                <th scope="row">{!! Form::label('updated_at', 'Última actualización:') !!}</th>
                <td>{!! $roles->updated_at !!}</td>
            </tr>
    </table>
</div>
