<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\vehiculos;

class CreatevehiculosRequest extends FormRequest
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
            'vei_marca' => 'Marca del vehiculo',
            'vei_modelo' => 'Modelo del vehiculo',
            'vei_placa' => 'Placa del vehiculo',
            'vei_numerochasis' => 'Numero de chasis',
            'vei_fecpoliza' => 'Fecha de poliza',
            'vei_feclimitesoat' => 'Fecha limite soat',
            'vei_feclimitetecnomecanica' => 'Fecha limite tecnomecanica'
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
            'vei_marca' => 'required|string|max:60',
            'vei_modelo' => 'required|string|max:60',
            'vei_placa' => 'required|string|max:10',
            'vei_numerochasis' => 'required|string|max:60',
            'vei_fecpoliza' => 'required|date',
            'vei_feclimitesoat' => 'required|date',
            'vei_feclimitetecnomecanica' => 'required|date'
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
