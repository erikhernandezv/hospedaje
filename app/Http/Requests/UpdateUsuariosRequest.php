<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use Illuminate\Routing\Route;

class UpdateUsuariosRequest extends FormRequest
{

    private $route;


    public function __construct(Route $route) {
        $this->route = $route;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return User::$rules;
    }

    /**
     * Cambia el nombre de los campos de la BD
     *
     * @return array
     */
    public function attributes()
    {
        return [
            '' => '',
            '' => '',
            '' => ''
        ];
    }

    /**
     * Cambia los mensajes que vienen por defecto en laravel
     *
     * @return array
     */
    public function messages()
    {
        return [
            //"por_fechafin.before" => "La fecha final de ser menor a un año."
        ];
    }

    /**
     * Convierte los valores de los inputs en mayusculas
     *
     * @return array
     */
    /*public function all($keys = null) {
        $attributes = parent::all();
        $attributes = array_map(function($item) {
            if(!is_array($item)){
                return strtoupper($item);
            }
        }, $attributes);
        return $attributes;
    }*/
}