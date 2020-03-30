<?php

namespace App\Repositories;

use App\Models\ingresos;
use App\Repositories\BaseRepository;

/**
 * Class ingresosRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:31 pm UTC
*/

class ingresosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ing_idpersona',
        'ing_habitacionasignada',
        'ing_horaingreso',
        'ing_ideps'
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
        $query = Ingresos::select("*");

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
        return ingresos::class;
    }
}
