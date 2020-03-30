<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {

  // Las rutas que incluyas aquí pasarán por el middleware 'auth'
  
  Route::get('/home', 'HomeController@index')->name('home');
  //Route::get('/users', 'UserController@index')->name('users');
  Route::resource('users', 'UserController')->middleware('auth');  
  
  //Le damos permiso al formulario registrar con el permiso usuarios_create
  Route::get('register', ['middleware' => ['permission:usuarios_create'], 'uses' => 'Auth\RegisterController@showRegistrationForm'])->name('register');

  Route::resource('roles', 'rolesController');
  Route::resource('permissions', 'permissionsController');
  
  Route::get('roles/permisos/{id}',[
    'as' => 'roles.permisos',
    'uses' => 'rolesController@permisos'
  ]);

  Route::get('permissions/getpermissions/{id}',[
    'as' => 'permissions.getpermissions',
    'uses' => 'permissionsController@getpermissions'
  ]);
  
  Route::delete('permissions/delete/{id}/{rol}',[
    'as' => 'permissions.delete',
    'uses' => 'permissionsController@delete'
  ]);

});

Route::get('/', function () {
    return redirect()->route('login');
  });

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//Auth::routes();


Route::resource('alimentacions', 'alimentacionController');

Route::resource('cajamenors', 'cajamenorController');

Route::resource('dotacions', 'dotacionController');

Route::resource('eps', 'epsController');

Route::resource('equipos', 'equiposController');

Route::resource('ingresos', 'ingresosController');

Route::resource('mantenimientoEquipos', 'mantenimiento_equiposController');

Route::resource('personas', 'personaController');

Route::resource('servicios', 'servicioController');

Route::resource('vehiculos', 'vehiculosController');

Route::resource('vehiculosRevisions', 'vehiculos_revisionController');