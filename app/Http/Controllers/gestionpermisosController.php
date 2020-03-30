<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gestionpermisosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
    	// Filtrar todos los métodos
        $this->middleware('auth');
        //$this->userRepository = $usuariosRepo;
    }

    /**
     * Display a listing of the permissions.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(){
    	$input = $request->all();

        if (empty($input)) {
            return view('user.index');
        } else {
            $usuarios = $this->userRepository->search($input)->paginate(10);
            return view('user.index')->with('usuarios', $usuarios);
        }
    }
}