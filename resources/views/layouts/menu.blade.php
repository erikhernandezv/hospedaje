<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('transportadors*') ? 'active' : '' }}">
    <a href="{!! route('transportadors.index') !!}"><i class="fa fa-edit"></i><span>Transportadors</span></a>
</li>

<li class="{{ Request::is('proveedors*') ? 'active' : '' }}">
    <a href="{!! route('proveedors.index') !!}"><i class="fa fa-edit"></i><span>Proveedors</span></a>
</li>

<li class="{{ Request::is('lineaproductos*') ? 'active' : '' }}">
    <a href="{!! route('lineaproductos.index') !!}"><i class="fa fa-edit"></i><span>Lineaproductos</span></a>
</li>

<li class="{{ Request::is('categoriaproductos*') ? 'active' : '' }}">
    <a href="{!! route('categoriaproductos.index') !!}"><i class="fa fa-edit"></i><span>Categoriaproductos</span></a>
</li>

<li class="{{ Request::is('alimentacions*') ? 'active' : '' }}">
    <a href="{!! route('alimentacions.index') !!}"><i class="fa fa-edit"></i><span>Alimentacions</span></a>
</li>

<li class="{{ Request::is('cajamenors*') ? 'active' : '' }}">
    <a href="{!! route('cajamenors.index') !!}"><i class="fa fa-edit"></i><span>Cajamenors</span></a>
</li>

<li class="{{ Request::is('dotacions*') ? 'active' : '' }}">
    <a href="{!! route('dotacions.index') !!}"><i class="fa fa-edit"></i><span>Dotacions</span></a>
</li>

<li class="{{ Request::is('eps*') ? 'active' : '' }}">
    <a href="{!! route('eps.index') !!}"><i class="fa fa-edit"></i><span>Eps</span></a>
</li>

<li class="{{ Request::is('equipos*') ? 'active' : '' }}">
    <a href="{!! route('equipos.index') !!}"><i class="fa fa-edit"></i><span>Equipos</span></a>
</li>

<li class="{{ Request::is('ingresos*') ? 'active' : '' }}">
    <a href="{!! route('ingresos.index') !!}"><i class="fa fa-edit"></i><span>Ingresos</span></a>
</li>

<li class="{{ Request::is('mantenimientoEquipos*') ? 'active' : '' }}">
    <a href="{!! route('mantenimientoEquipos.index') !!}"><i class="fa fa-edit"></i><span>Mantenimiento Equipos</span></a>
</li>

<li class="{{ Request::is('personas*') ? 'active' : '' }}">
    <a href="{!! route('personas.index') !!}"><i class="fa fa-edit"></i><span>Personas</span></a>
</li>

<li class="{{ Request::is('servicios*') ? 'active' : '' }}">
    <a href="{!! route('servicios.index') !!}"><i class="fa fa-edit"></i><span>Servicios</span></a>
</li>

<li class="{{ Request::is('vehiculos*') ? 'active' : '' }}">
    <a href="{!! route('vehiculos.index') !!}"><i class="fa fa-edit"></i><span>Vehiculos</span></a>
</li>

<li class="{{ Request::is('vehiculosRevisions*') ? 'active' : '' }}">
    <a href="{!! route('vehiculosRevisions.index') !!}"><i class="fa fa-edit"></i><span>Vehiculos Revisions</span></a>
</li>

