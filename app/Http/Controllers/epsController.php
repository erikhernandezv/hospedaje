<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateepsRequest;
use App\Http\Requests\UpdateepsRequest;
use App\Repositories\epsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class epsController extends AppBaseController
{
    /** @var  epsRepository */
    private $epsRepository;

    public function __construct(epsRepository $epsRepo)
    {
        $this->epsRepository = $epsRepo;
    }

    /**
     * Display a listing of the eps.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $eps = $this->epsRepository->paginate(30);

        return view('eps.index')
            ->with('eps', $eps);
    }

    /**
     * Show the form for creating a new eps.
     *
     * @return Response
     */
    public function create()
    {
        return view('eps.create');
    }

    /**
     * Store a newly created eps in storage.
     *
     * @param CreateepsRequest $request
     *
     * @return Response
     */
    public function store(CreateepsRequest $request)
    {
        $input = $request->all();

        $eps = $this->epsRepository->create($input);

        Flash::success('Eps saved successfully.');

        return redirect(route('eps.index'));
    }

    /**
     * Display the specified eps.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eps = $this->epsRepository->find($id);

        if (empty($eps)) {
            Flash::error('Eps not found');

            return redirect(route('eps.index'));
        }

        return view('eps.show')->with('eps', $eps);
    }

    /**
     * Show the form for editing the specified eps.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eps = $this->epsRepository->find($id);

        if (empty($eps)) {
            Flash::error('Eps not found');

            return redirect(route('eps.index'));
        }

        return view('eps.edit')->with('eps', $eps);
    }

    /**
     * Update the specified eps in storage.
     *
     * @param int $id
     * @param UpdateepsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateepsRequest $request)
    {
        $eps = $this->epsRepository->find($id);

        if (empty($eps)) {
            Flash::error('Eps not found');

            return redirect(route('eps.index'));
        }

        $eps = $this->epsRepository->update($request->all(), $id);

        Flash::success('Eps updated successfully.');

        return redirect(route('eps.index'));
    }

    /**
     * Remove the specified eps from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eps = $this->epsRepository->find($id);

        if (empty($eps)) {
            Flash::error('Eps not found');

            return redirect(route('eps.index'));
        }

        $this->epsRepository->delete($id);

        Flash::success('Eps deleted successfully.');

        return redirect(route('eps.index'));
    }
}
