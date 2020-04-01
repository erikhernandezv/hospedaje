<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\persona;

class CreatepersonaRequest extends FormRequest
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
        return [
            'per_nombre1' => 'required|string|max:60',
            'per_nombre2' => "string|max:60",
            'per_apellido1' => 'required|string|max:60',
            'per_apellido2' => "string|max:60",
            'per_tipdoc' => 'required|string|max:2|in:CC,TI,CE,RC',
            'per_numdoc' => 'required|integer',
            'per_idmunicipio' => 'required|integer',
            'per_direccion' => "string|max:200",
            'per_telefono' => "string|max:15"
        ];
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
