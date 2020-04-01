<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\servicio;

class CreateservicioRequest extends FormRequest
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
            "ser_nombre" => "Nombre del servicio",
            "ser_valunitario" => "Valor unitario del servicio"
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
            'ser_nombre' => 'required|string|max:250|unique:servicio,ser_nombre,NULL,ser_consecutivo,deleted_at,NULL',
            'ser_valunitario' => 'required|numeric'
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
