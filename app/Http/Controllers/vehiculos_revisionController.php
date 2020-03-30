<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createvehiculos_revisionRequest;
use App\Http\Requests\Updatevehiculos_revisionRequest;
use App\Repositories\vehiculos_revisionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class vehiculos_revisionController extends AppBaseController
{
    /** @var  vehiculos_revisionRepository */
    private $vehiculosRevisionRepository;

    public function __construct(vehiculos_revisionRepository $vehiculosRevisionRepo)
    {
        $this->vehiculosRevisionRepository = $vehiculosRevisionRepo;
    }

    /**
     * Display a listing of the vehiculos_revision.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vehiculosRevisions = $this->vehiculosRevisionRepository->paginate(30);

        return view('vehiculos_revisions.index')
            ->with('vehiculosRevisions', $vehiculosRevisions);
    }

    /**
     * Show the form for creating a new vehiculos_revision.
     *
     * @return Response
     */
    public function create()
    {
        return view('vehiculos_revisions.create');
    }

    /**
     * Store a newly created vehiculos_revision in storage.
     *
     * @param Createvehiculos_revisionRequest $request
     *
     * @return Response
     */
    public function store(Createvehiculos_revisionRequest $request)
    {
        $input = $request->all();

        $vehiculosRevision = $this->vehiculosRevisionRepository->create($input);

        Flash::success('Vehiculos Revision saved successfully.');

        return redirect(route('vehiculosRevisions.index'));
    }

    /**
     * Display the specified vehiculos_revision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehiculosRevision = $this->vehiculosRevisionRepository->find($id);

        if (empty($vehiculosRevision)) {
            Flash::error('Vehiculos Revision not found');

            return redirect(route('vehiculosRevisions.index'));
        }

        return view('vehiculos_revisions.show')->with('vehiculosRevision', $vehiculosRevision);
    }

    /**
     * Show the form for editing the specified vehiculos_revision.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehiculosRevision = $this->vehiculosRevisionRepository->find($id);

        if (empty($vehiculosRevision)) {
            Flash::error('Vehiculos Revision not found');

            return redirect(route('vehiculosRevisions.index'));
        }

        return view('vehiculos_revisions.edit')->with('vehiculosRevision', $vehiculosRevision);
    }

    /**
     * Update the specified vehiculos_revision in storage.
     *
     * @param int $id
     * @param Updatevehiculos_revisionRequest $request
     *
     * @return Response
     */
    public function update($id, Updatevehiculos_revisionRequest $request)
    {
        $vehiculosRevision = $this->vehiculosRevisionRepository->find($id);

        if (empty($vehiculosRevision)) {
            Flash::error('Vehiculos Revision not found');

            return redirect(route('vehiculosRevisions.index'));
        }

        $vehiculosRevision = $this->vehiculosRevisionRepository->update($request->all(), $id);

        Flash::success('Vehiculos Revision updated successfully.');

        return redirect(route('vehiculosRevisions.index'));
    }

    /**
     * Remove the specified vehiculos_revision from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehiculosRevision = $this->vehiculosRevisionRepository->find($id);

        if (empty($vehiculosRevision)) {
            Flash::error('Vehiculos Revision not found');

            return redirect(route('vehiculosRevisions.index'));
        }

        $this->vehiculosRevisionRepository->delete($id);

        Flash::success('Vehiculos Revision deleted successfully.');

        return redirect(route('vehiculosRevisions.index'));
    }
}
