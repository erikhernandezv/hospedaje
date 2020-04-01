<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\persona;

class UpdatepersonaRequest extends FormRequest
{

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
     * Cambia el nombre de los campos de la BD
     *
     * @return array
     */
    public function attributes()
    {
        return [
            "per_nombre1" => "Primer nombre",
            'per_nombre2' => "Segundo nombre",
            'per_apellido1' => "Primer Apellido",
            'per_apellido2' => "Segundo apellido",
            'per_tipdoc' => "Tipo de documento",
            'per_numdoc' => "Numero de documento",
            'per_direccion' => "Dirección",
            'per_telefono' => "Teléfono",
            'per_idmunicipio' => "Municipio"
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return persona::$rules;
    }

    /**
     * Convierte los valores de los inputs en mayusculas
     *
     * @return array
     */
    public function all($keys = null) {
        $attributes = parent::all();
        $attributes = array_map(function($item) {
            if(!is_array($item)){
                return strtoupper($item);
            }
        }, $attributes);
        return $attributes;
    }

}
