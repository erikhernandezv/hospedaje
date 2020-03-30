<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\dotacion;

class CreatedotacionRequest extends FormRequest
{
    $id = $this->route("dotacion");

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
        return [
            'dot_detalle' => 'required|max:255|unique:dotacion,dot_detalle,NULL,dot_consecutivo,deleted_at,NULL',
            'dot_valorperdidadano' => 'required|numeric|min:0|max:10000000'
        ];
    }

    /**
     * Cambia el nombre de los campos de la BD
     *
     * @return array
     */
    public function attributes()
    {
        return [
            "dot_detalle" => "Detalle de la dotación",
            "dot_valorperdidadano" => "Valor por perdida o daño"
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
