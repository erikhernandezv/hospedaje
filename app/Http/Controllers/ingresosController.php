<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateingresosRequest;
use App\Http\Requests\UpdateingresosRequest;
use App\Repositories\ingresosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ingresosController extends AppBaseController
{
    /** @var  ingresosRepository */
    private $ingresosRepository;

    public function __construct(ingresosRepository $ingresosRepo)
    {
        $this->ingresosRepository = $ingresosRepo;
    }

    /**
     * Display a listing of the ingresos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ingresos = $this->ingresosRepository->paginate(30);

        return view('ingresos.index')
            ->with('ingresos', $ingresos);
    }

    /**
     * Show the form for creating a new ingresos.
     *
     * @return Response
     */
    public function create()
    {
        return view('ingresos.create');
    }

    /**
     * Store a newly created ingresos in storage.
     *
     * @param CreateingresosRequest $request
     *
     * @return Response
     */
    public function store(CreateingresosRequest $request)
    {
        $input = $request->all();

        $ingresos = $this->ingresosRepository->create($input);

        Flash::success('Ingresos saved successfully.');

        return redirect(route('ingresos.index'));
    }

    /**
     * Display the specified ingresos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ingresos = $this->ingresosRepository->find($id);

        if (empty($ingresos)) {
            Flash::error('Ingresos not found');

            return redirect(route('ingresos.index'));
        }

        return view('ingresos.show')->with('ingresos', $ingresos);
    }

    /**
     * Show the form for editing the specified ingresos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ingresos = $this->ingresosRepository->find($id);

        if (empty($ingresos)) {
            Flash::error('Ingresos not found');

            return redirect(route('ingresos.index'));
        }

        return view('ingresos.edit')->with('ingresos', $ingresos);
    }

    /**
     * Update the specified ingresos in storage.
     *
     * @param int $id
     * @param UpdateingresosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateingresosRequest $request)
    {
        $ingresos = $this->ingresosRepository->find($id);

        if (empty($ingresos)) {
            Flash::error('Ingresos not found');

            return redirect(route('ingresos.index'));
        }

        $ingresos = $this->ingresosRepository->update($request->all(), $id);

        Flash::success('Ingresos updated successfully.');

        return redirect(route('ingresos.index'));
    }

    /**
     * Remove the specified ingresos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ingresos = $this->ingresosRepository->find($id);

        if (empty($ingresos)) {
            Flash::error('Ingresos not found');

            return redirect(route('ingresos.index'));
        }

        $this->ingresosRepository->delete($id);

        Flash::success('Ingresos deleted successfully.');

        return redirect(route('ingresos.index'));
    }
}
