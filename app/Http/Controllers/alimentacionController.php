<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatealimentacionRequest;
use App\Http\Requests\UpdatealimentacionRequest;
use App\Repositories\alimentacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class alimentacionController extends AppBaseController
{
    /** @var  alimentacionRepository */
    private $alimentacionRepository;

    public function __construct(alimentacionRepository $alimentacionRepo)
    {
        $this->alimentacionRepository = $alimentacionRepo;
    }

    /**
     * Display a listing of the alimentacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $alimentacions = $this->alimentacionRepository->paginate(30);

        return view('alimentacions.index')
            ->with('alimentacions', $alimentacions);
    }

    /**
     * Show the form for creating a new alimentacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('alimentacions.create');
    }

    /**
     * Store a newly created alimentacion in storage.
     *
     * @param CreatealimentacionRequest $request
     *
     * @return Response
     */
    public function store(CreatealimentacionRequest $request)
    {
        $input = $request->all();

        $alimentacion = $this->alimentacionRepository->create($input);

        Flash::success('Alimentacion saved successfully.');

        return redirect(route('alimentacions.index'));
    }

    /**
     * Display the specified alimentacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alimentacion = $this->alimentacionRepository->find($id);

        if (empty($alimentacion)) {
            Flash::error('Alimentacion not found');

            return redirect(route('alimentacions.index'));
        }

        return view('alimentacions.show')->with('alimentacion', $alimentacion);
    }

    /**
     * Show the form for editing the specified alimentacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alimentacion = $this->alimentacionRepository->find($id);

        if (empty($alimentacion)) {
            Flash::error('Alimentacion not found');

            return redirect(route('alimentacions.index'));
        }

        return view('alimentacions.edit')->with('alimentacion', $alimentacion);
    }

    /**
     * Update the specified alimentacion in storage.
     *
     * @param int $id
     * @param UpdatealimentacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatealimentacionRequest $request)
    {
        $alimentacion = $this->alimentacionRepository->find($id);

        if (empty($alimentacion)) {
            Flash::error('Alimentacion not found');

            return redirect(route('alimentacions.index'));
        }

        $alimentacion = $this->alimentacionRepository->update($request->all(), $id);

        Flash::success('Alimentacion updated successfully.');

        return redirect(route('alimentacions.index'));
    }

    /**
     * Remove the specified alimentacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alimentacion = $this->alimentacionRepository->find($id);

        if (empty($alimentacion)) {
            Flash::error('Alimentacion not found');

            return redirect(route('alimentacions.index'));
        }

        $this->alimentacionRepository->delete($id);

        Flash::success('Alimentacion deleted successfully.');

        return redirect(route('alimentacions.index'));
    }
}
