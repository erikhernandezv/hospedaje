<?php

namespace App\Repositories;

use App\Models\mantenimiento_equipos;
use App\Repositories\BaseRepository;

/**
 * Class mantenimiento_equiposRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:31 pm UTC
*/

class mantenimiento_equiposRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'meq_idequipo',
        'meq_programada',
        'meq_fechaprogramada',
        'med_ejecutada'
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
        $query = Mantenimiento_equipos::select("*");

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
        return mantenimiento_equipos::class;
    }
}
