<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedotacionRequest;
use App\Http\Requests\UpdatedotacionRequest;
use App\Repositories\dotacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class dotacionController extends AppBaseController
{
    /** @var  dotacionRepository */
    private $dotacionRepository;

    public function __construct(dotacionRepository $dotacionRepo)
    {
        $this->dotacionRepository = $dotacionRepo;
    }

    /**
     * Display a listing of the dotacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dotacions = $this->dotacionRepository->paginate(30);

        return view('dotacions.index')
            ->with('dotacions', $dotacions);
    }

    /**
     * Show the form for creating a new dotacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('dotacions.create');
    }

    /**
     * Store a newly created dotacion in storage.
     *
     * @param CreatedotacionRequest $request
     *
     * @return Response
     */
    public function store(CreatedotacionRequest $request)
    {
        $input = $request->all();

        $dotacion = $this->dotacionRepository->create($input);

        Flash::success('Se almacenó la información de dotaciones para el hospedaje.');

        return redirect(route('dotacions.index'));
    }

    /**
     * Display the specified dotacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dotacion = $this->dotacionRepository->find($id);

        if (empty($dotacion)) {
            Flash::error('No se encontró la dotación');

            return redirect(route('dotacions.index'));
        }

        return view('dotacions.show')->with('dotacion', $dotacion);
    }

    /**
     * Show the form for editing the specified dotacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dotacion = $this->dotacionRepository->find($id);

        if (empty($dotacion)) {
            Flash::error('o se encontró la dotación');

            return redirect(route('dotacions.index'));
        }

        return view('dotacions.edit')->with('dotacion', $dotacion);
    }

    /**
     * Update the specified dotacion in storage.
     *
     * @param int $id
     * @param UpdatedotacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedotacionRequest $request)
    {
        $dotacion = $this->dotacionRepository->find($id);

        if (empty($dotacion)) {
            Flash::error('No se encontró la dotación');

            return redirect(route('dotacions.index'));
        }

        $dotacion = $this->dotacionRepository->update($request->all(), $id);

        Flash::success('Se actualizó la información de la dotacion para el hospedaje.');

        return redirect(route('dotacions.index'));
    }

    /**
     * Remove the specified dotacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dotacion = $this->dotacionRepository->find($id);

        if (empty($dotacion)) {
            Flash::error('No se encontró la dotación');

            return redirect(route('dotacions.index'));
        }

        $this->dotacionRepository->delete($id);

        Flash::success('Se eliminó la información de la dotación para el hospedaje');

        return redirect(route('dotacions.index'));
    }
}
