<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecajamenorRequest;
use App\Http\Requests\UpdatecajamenorRequest;
use App\Repositories\cajamenorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class cajamenorController extends AppBaseController
{
    /** @var  cajamenorRepository */
    private $cajamenorRepository;

    public function __construct(cajamenorRepository $cajamenorRepo)
    {
        $this->cajamenorRepository = $cajamenorRepo;
    }

    /**
     * Display a listing of the cajamenor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cajamenors = $this->cajamenorRepository->paginate(30);

        return view('cajamenors.index')
            ->with('cajamenors', $cajamenors);
    }

    /**
     * Show the form for creating a new cajamenor.
     *
     * @return Response
     */
    public function create()
    {
        return view('cajamenors.create');
    }

    /**
     * Store a newly created cajamenor in storage.
     *
     * @param CreatecajamenorRequest $request
     *
     * @return Response
     */
    public function store(CreatecajamenorRequest $request)
    {
        $input = $request->all();

        $cajamenor = $this->cajamenorRepository->create($input);

        Flash::success('Cajamenor saved successfully.');

        return redirect(route('cajamenors.index'));
    }

    /**
     * Display the specified cajamenor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cajamenor = $this->cajamenorRepository->find($id);

        if (empty($cajamenor)) {
            Flash::error('Cajamenor not found');

            return redirect(route('cajamenors.index'));
        }

        return view('cajamenors.show')->with('cajamenor', $cajamenor);
    }

    /**
     * Show the form for editing the specified cajamenor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cajamenor = $this->cajamenorRepository->find($id);

        if (empty($cajamenor)) {
            Flash::error('Cajamenor not found');

            return redirect(route('cajamenors.index'));
        }

        return view('cajamenors.edit')->with('cajamenor', $cajamenor);
    }

    /**
     * Update the specified cajamenor in storage.
     *
     * @param int $id
     * @param UpdatecajamenorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecajamenorRequest $request)
    {
        $cajamenor = $this->cajamenorRepository->find($id);

        if (empty($cajamenor)) {
            Flash::error('Cajamenor not found');

            return redirect(route('cajamenors.index'));
        }

        $cajamenor = $this->cajamenorRepository->update($request->all(), $id);

        Flash::success('Cajamenor updated successfully.');

        return redirect(route('cajamenors.index'));
    }

    /**
     * Remove the specified cajamenor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cajamenor = $this->cajamenorRepository->find($id);

        if (empty($cajamenor)) {
            Flash::error('Cajamenor not found');

            return redirect(route('cajamenors.index'));
        }

        $this->cajamenorRepository->delete($id);

        Flash::success('Cajamenor deleted successfully.');

        return redirect(route('cajamenors.index'));
    }
}
