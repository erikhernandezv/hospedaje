<?php

namespace App\Http\Controllers;

use App\Repositories\PermissionsRepository;
use App\Repositories\PermissionRoleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use DB;
use Flash;
use Response;

class permissionsController extends AppBaseController
{
    /** @var  rolesRepository */
    private $permissionsRepository;
    private $permissionRoleRepository;

    public function __construct(PermissionsRepository $permissionsRepo, PermissionRoleRepository $PermissionRoleRepo)
    {
        $this->permissionsRepository = $permissionsRepo;
        $this->permissionRoleRepository = $PermissionRoleRepo;
    }

    /**
     * Display a listing of the roles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function getpermissions($request)
    {
        $input['id'] = $request;

        $permissions = $this->permissionsRepository->search($input)->get();
        return $permissions;
    }

    /**
     * Display a listing of the roles.
     *
     * @param Request $request
     *
     * @return Response
     */
    /*public function permisos($id, $name_display)
    {
        $input['id'] = $id;
        $input['name_display'] = $name_display;

        if (empty($id)) {
            return view('roles.index');
        } else {
            //$roles = $this->userRepository->search($input)->paginate(30);
            $permissions = $this->permissionsRepository->search($input)->paginate(30);
            return view('roles.permisos')->with('display_name', $name_display)->with('permissions', $permissions);
        }
    }*/

    /**
     * Show the form for creating a new roles.
     *
     * @return Response
     */
    /*public function create()
    {
        return view('roles.create');
    }*/

    /**
     * Store a newly created roles in storage.
     *
     * @param CreaterolesRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        //dd($request);
        //$roles = $this->rolesRepository->create($input);
        DB::insert('insert into permission_role (permission_id, role_id) values (?, ?)', [$input['permiso'], $input['rol']]);

        //Flash::success('Se guardó el rol correctamente.');
        //return "Hola gracias por entrar a este articulo";
        //return redirect(route('roles.index'));
    }

    /**
     * Display the specified roles.
     *
     * @param int $id
     *
     * @return Response
     */
    /*public function show($id)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Rol no encontrado');

            return redirect(route('roles.index'));
        }

        return view('roles.show')->with('roles', $roles);
    }*/

    /**
     * Show the form for editing the specified roles.
     *
     * @param int $id
     *
     * @return Response
     */
    /*public function edit($id)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Rol no encontrado');

            return redirect(route('roles.index'));
        }

        return view('roles.edit')->with('roles', $roles);
    }*/

    /**
     * Update the specified roles in storage.
     *
     * @param int $id
     * @param UpdaterolesRequest $request
     *
     * @return Response
     */
    /*public function update($id, UpdaterolesRequest $request)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Rol no encontrado');

            return redirect(route('roles.index'));
        }

        $roles = $this->rolesRepository->update($request->all(), $id);

        Flash::success('Rol actualizado correctamente.');

        return redirect(route('roles.index'));
    }*/

    /**
     * Remove the specified roles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function delete($id, $rol)
    {
        $permissions = $this->permissionRoleRepository->find($id);

        if (empty($permissions)) {
            Flash::error('Permisos no encontrados');

            return redirect(route('roles.permisos',$rol));
        }

        $this->destroy($id);

        Flash::success('Permiso eliminado correctamente.');

        return redirect(route('roles.permisos',$rol));
    }

    /**
     * Remove the specified roles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        //$permissions = $this->permissionRoleRepository->find($id);

        /*if (empty($permissions)) {
            Flash::error('Permisos no encontrados');

            return redirect(route('roles.permisos'));
        }*/

        $this->permissionRoleRepository->delete($id);

        //Flash::success('Permiso eliminado correctamente.');

        //return redirect(route('roles.index'));
    }

    public function permisos(){
        $opcion = array("" => "Seleccione...");
        $allPermissions = $this->permissionsRepository->getAllPermissions();
        foreach ($allPermissions as $value) 
        {
            $opcion[$value->id] = $value->display_name;
        }
        return $opcion;
    }
}
