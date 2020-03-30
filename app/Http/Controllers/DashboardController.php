<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
      //dd('Hola mundo dsh.blade.php');
      return view('layouts/app');
    }
}
