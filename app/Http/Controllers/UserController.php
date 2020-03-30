<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUsuariosRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Flash;

class UserController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $usuariosRepo)
    {
        // Filtrar todos los métodos
        $this->middleware('auth');

        $this->middleware('can:usuarios_create',  ['only' => ['create', 'store']]);
        /*$this->middleware('can:usuarios_search',  ['only' => ['index']]);
        $this->middleware('can:usuarios_update',  ['only' => ['edit', 'update']]);
        $this->middleware('can:usuarios_reports', ['only' => ['csv', 'xls']]);
        $this->middleware('can:usuarios_deleted', ['only' => ['delete']]);
        */
        $this->userRepository = $usuariosRepo;
    }

    /**
     * Display a listing of the Usuarios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $input = $request->all();

        if (empty($input)) {
            return view('user.index');
        } else {
            $usuarios = $this->userRepository->search($input)->paginate(10);
            return view('user.index')->with('usuarios', $usuarios);
        }
    }

    /**
     * Show the form for editing the specified Usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usuarios = $this->userRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('No se encontro registro de Usuarios en el sistema.');
            return redirect(route('users.index'));
        }

        return view('user.edit')->with('usuarios', $usuarios);
    }

    /**
     * Display the specified Usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usuarios = $this->userRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('No se encontro registro de Usuarios en el sistema.');
            return redirect(route('users.index'));
        }

        return view('user.show')->with('usuarios', $usuarios);
    }

    /**
     * Update the specified Usuarios in storage.
     *
     * @param int $id
     * @param UpdateUsuariosRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        //dd($request);
        $usuarios = $this->userRepository->find($id);
        $inputs = $request->all();

        if (empty($usuarios)) {
            Flash::error('No se encontro registro de Usuarios en el sistema.');
            return redirect(route('users.index'));
        }

        $excluidos = ["_method", "_token"];
        $input = array_diff_key($inputs, array_flip($excluidos));
        $input['password'] = Hash::make($input['password1']);
        $isUpdate = $this->userRepository->isUpdatable($usuarios, $input);
        //$this->userRepository->updatePassword($input);

        if (!$isUpdate) {
            if ($request->ajax()) {
                $result = $this->mensaje->message(Mensaje::INFO, 'No se realizó ningún cambio en el registro de Usuarios.');
                return response()->json($result);
            } else {
                Flash::info('No se realizó ningún cambio en el registro de Usuarios.');
                return redirect(route('users.edit', $id));
            }
        }
//dd(var_dump($input));
        $transaccion = $this->userRepository->modify($input, $id);
        return $this->respuesta($request, $transaccion, $id, false);
    }

    /**
     * Remove the specified Usuarios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usuarios = $this->userRepository->find($id);

        if (empty($usuarios)) {
            Flash::error('No se encontro registro de Usuarios en el sistema.');
            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);
        Flash::success('Usuarios eliminada correctamente del sistema.');
        return redirect(route('users.index'));
    }

    /**
     * Devuelve la respuesta dependiendo del metodo a guardar.
     *
     * @param  Request $request, String $transaccion, int $id, boolean $metodo
     *
     * @return Response
     */
    public function respuesta($request, $transaccion, $id = null, $metodo = true) {
        if ($metodo) {
            if ($request->ajax()) {
                if ($transaccion) {
                    $result = $this->mensaje->message(Mensaje::SUCCESS, "El registro de Usuarios se guardo correctamente.");
                } else {
                    $result = $this->mensaje->message(Mensaje::DANGER, "Error al guardar el registro de Usuarios.");
                }
                return response()->json($result);
            } else {
                if ($transaccion) {
                    Flash::success('El registro de Usuarios se guardo correctamente.');
                    return redirect(route('users.index'));
                } else {
                    Flash::error("Error al guardar el registro de Usuarios.");
                    return back()->withInput();
                }
            }
        } else {
            if ($request->ajax()) {
                if ($transaccion) {
                    $result = $this->mensaje->message(Mensaje::SUCCESS, "El registro de Usuarios se actualizo correctamente.");
                } else {
                    $result = $this->mensaje->message(Mensaje::WARNING, "Error al actualizar el registro de Usuarios.");
                }
                return response()->json($result);
            } else {
                if ($transaccion) {
                    Flash::success("El registro de Usuarios se actualizo correctamente.");
                    return redirect(route('users.index'));
                } else {
                    Flash::error("Error al actualizar el registro de Usuarios.");
                    return redirect(route('users.edit',[$id]));
                }
            }
        }
    }
}
