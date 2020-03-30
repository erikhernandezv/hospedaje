<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createmantenimiento_equiposRequest;
use App\Http\Requests\Updatemantenimiento_equiposRequest;
use App\Repositories\mantenimiento_equiposRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class mantenimiento_equiposController extends AppBaseController
{
    /** @var  mantenimiento_equiposRepository */
    private $mantenimientoEquiposRepository;

    public function __construct(mantenimiento_equiposRepository $mantenimientoEquiposRepo)
    {
        $this->mantenimientoEquiposRepository = $mantenimientoEquiposRepo;
    }

    /**
     * Display a listing of the mantenimiento_equipos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mantenimientoEquipos = $this->mantenimientoEquiposRepository->paginate(30);

        return view('mantenimiento_equipos.index')
            ->with('mantenimientoEquipos', $mantenimientoEquipos);
    }

    /**
     * Show the form for creating a new mantenimiento_equipos.
     *
     * @return Response
     */
    public function create()
    {
        return view('mantenimiento_equipos.create');
    }

    /**
     * Store a newly created mantenimiento_equipos in storage.
     *
     * @param Createmantenimiento_equiposRequest $request
     *
     * @return Response
     */
    public function store(Createmantenimiento_equiposRequest $request)
    {
        $input = $request->all();

        $mantenimientoEquipos = $this->mantenimientoEquiposRepository->create($input);

        Flash::success('Mantenimiento Equipos saved successfully.');

        return redirect(route('mantenimientoEquipos.index'));
    }

    /**
     * Display the specified mantenimiento_equipos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mantenimientoEquipos = $this->mantenimientoEquiposRepository->find($id);

        if (empty($mantenimientoEquipos)) {
            Flash::error('Mantenimiento Equipos not found');

            return redirect(route('mantenimientoEquipos.index'));
        }

        return view('mantenimiento_equipos.show')->with('mantenimientoEquipos', $mantenimientoEquipos);
    }

    /**
     * Show the form for editing the specified mantenimiento_equipos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mantenimientoEquipos = $this->mantenimientoEquiposRepository->find($id);

        if (empty($mantenimientoEquipos)) {
            Flash::error('Mantenimiento Equipos not found');

            return redirect(route('mantenimientoEquipos.index'));
        }

        return view('mantenimiento_equipos.edit')->with('mantenimientoEquipos', $mantenimientoEquipos);
    }

    /**
     * Update the specified mantenimiento_equipos in storage.
     *
     * @param int $id
     * @param Updatemantenimiento_equiposRequest $request
     *
     * @return Response
     */
    public function update($id, Updatemantenimiento_equiposRequest $request)
    {
        $mantenimientoEquipos = $this->mantenimientoEquiposRepository->find($id);

        if (empty($mantenimientoEquipos)) {
            Flash::error('Mantenimiento Equipos not found');

            return redirect(route('mantenimientoEquipos.index'));
        }

        $mantenimientoEquipos = $this->mantenimientoEquiposRepository->update($request->all(), $id);

        Flash::success('Mantenimiento Equipos updated successfully.');

        return redirect(route('mantenimientoEquipos.index'));
    }

    /**
     * Remove the specified mantenimiento_equipos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mantenimientoEquipos = $this->mantenimientoEquiposRepository->find($id);

        if (empty($mantenimientoEquipos)) {
            Flash::error('Mantenimiento Equipos not found');

            return redirect(route('mantenimientoEquipos.index'));
        }

        $this->mantenimientoEquiposRepository->delete($id);

        Flash::success('Mantenimiento Equipos deleted successfully.');

        return redirect(route('mantenimientoEquipos.index'));
    }
}
