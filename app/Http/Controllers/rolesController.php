<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterolesRequest;
use App\Http\Requests\UpdaterolesRequest;
use App\Repositories\rolesRepository;
use App\Repositories\PermissionsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class rolesController extends AppBaseController
{
    /** @var  rolesRepository */
    private $rolesRepository;

    public function __construct(rolesRepository $rolesRepo, PermissionsRepository $permissionsRepo)
    {
        $this->rolesRepository = $rolesRepo;
        $this->permissionsRepository = $permissionsRepo;
    }

    /**
     * Display a listing of the roles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $input = $request->all();
        $roles = $this->rolesRepository->search($input)->paginate(30);

        return view('roles.index')->with('roles', $roles);
    }

    /**
     * Display a listing of the roles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function permisos($id)
    {
        $roles = $this->rolesRepository->find($id);
        
        $input['id'] = $id;
        $input['name_display'] = $roles->display_name;

        if (empty($id)) {
            return view('roles.index');
        } else {
            $permissions = $this->permissionsRepository->searchAll($input)->paginate(30);
            //dd($input);
            return view('roles.permisos')->with('display_name', $input['name_display'])->with('permissions', $permissions)->with('rol',$id);
        }
    }

    /**
     * Show the form for creating a new roles.
     *
     * @return Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created roles in storage.
     *
     * @param CreaterolesRequest $request
     *
     * @return Response
     */
    public function store(CreaterolesRequest $request)
    {
        $input = $request->all();

        $roles = $this->rolesRepository->create($input);

        Flash::success('Se guardó el rol correctamente.');

        return redirect(route('roles.index'));
    }

    /**
     * Display the specified roles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Rol no encontrado');

            return redirect(route('roles.index'));
        }

        return view('roles.show')->with('roles', $roles);
    }

    /**
     * Show the form for editing the specified roles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Rol no encontrado');

            return redirect(route('roles.index'));
        }

        return view('roles.edit')->with('roles', $roles);
    }

    /**
     * Update the specified roles in storage.
     *
     * @param int $id
     * @param UpdaterolesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterolesRequest $request)
    {
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Rol no encontrado');

            return redirect(route('roles.index'));
        }

        $roles = $this->rolesRepository->update($request->all(), $id);

        Flash::success('Rol actualizado correctamente.');

        return redirect(route('roles.index'));
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
        $roles = $this->rolesRepository->find($id);

        if (empty($roles)) {
            Flash::error('Rol no encontrado');

            return redirect(route('roles.index'));
        }

        $this->rolesRepository->delete($id);

        Flash::success('Rol eliminado correctamente.');

        return redirect(route('roles.index'));
    }
}
