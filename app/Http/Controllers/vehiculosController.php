<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevehiculosRequest;
use App\Http\Requests\UpdatevehiculosRequest;
use App\Repositories\vehiculosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class vehiculosController extends AppBaseController
{
    /** @var  vehiculosRepository */
    private $vehiculosRepository;

    public function __construct(vehiculosRepository $vehiculosRepo)
    {
        $this->vehiculosRepository = $vehiculosRepo;
    }

    /**
     * Display a listing of the vehiculos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vehiculos = $this->vehiculosRepository->paginate(30);

        return view('vehiculos.index')
            ->with('vehiculos', $vehiculos);
    }

    /**
     * Show the form for creating a new vehiculos.
     *
     * @return Response
     */
    public function create()
    {
        return view('vehiculos.create');
    }

    /**
     * Store a newly created vehiculos in storage.
     *
     * @param CreatevehiculosRequest $request
     *
     * @return Response
     */
    public function store(CreatevehiculosRequest $request)
    {
        $input = $request->all();

        $vehiculos = $this->vehiculosRepository->create($input);

        Flash::success('Vehiculos saved successfully.');

        return redirect(route('vehiculos.index'));
    }

    /**
     * Display the specified vehiculos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehiculos = $this->vehiculosRepository->find($id);

        if (empty($vehiculos)) {
            Flash::error('Vehiculos not found');

            return redirect(route('vehiculos.index'));
        }

        return view('vehiculos.show')->with('vehiculos', $vehiculos);
    }

    /**
     * Show the form for editing the specified vehiculos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehiculos = $this->vehiculosRepository->find($id);

        if (empty($vehiculos)) {
            Flash::error('Vehiculos not found');

            return redirect(route('vehiculos.index'));
        }

        return view('vehiculos.edit')->with('vehiculos', $vehiculos);
    }

    /**
     * Update the specified vehiculos in storage.
     *
     * @param int $id
     * @param UpdatevehiculosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevehiculosRequest $request)
    {
        $vehiculos = $this->vehiculosRepository->find($id);

        if (empty($vehiculos)) {
            Flash::error('Vehiculos not found');

            return redirect(route('vehiculos.index'));
        }

        $vehiculos = $this->vehiculosRepository->update($request->all(), $id);

        Flash::success('Vehiculos updated successfully.');

        return redirect(route('vehiculos.index'));
    }

    /**
     * Remove the specified vehiculos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehiculos = $this->vehiculosRepository->find($id);

        if (empty($vehiculos)) {
            Flash::error('Vehiculos not found');

            return redirect(route('vehiculos.index'));
        }

        $this->vehiculosRepository->delete($id);

        Flash::success('Vehiculos deleted successfully.');

        return redirect(route('vehiculos.index'));
    }
}
