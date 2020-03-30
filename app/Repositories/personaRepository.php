<?php

namespace App\Repositories;

use App\Models\persona;
use App\Repositories\BaseRepository;

/**
 * Class personaRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:33 pm UTC
*/

class personaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'per_nombre1',
        'per_nombre2',
        'per_apellido1',
        'per_apellido2',
        'per_tipdoc',
        'per_numdoc',
        'per_direccion',
        'per_telefono',
        'per_idmunicipio'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Search el modelo
     **/
    public function search($input)
    {
        $query = Persona::select("*");

        if (isset($input['_consecutivo']) && $input['_consecutivo'] != '') {
            $query->where('_consecutivo', '=', trim($input['_consecutivo']));
        }

        if (isset($input['_descripcion']) && $input['_descripcion'] != '') {
            $query->where('_descripcion', "ILIKE", "%" . trim($input['_descripcion']) . "%");
        }

        return $query;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return persona::class;
    }
}
