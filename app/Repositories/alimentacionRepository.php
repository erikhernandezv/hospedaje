<?php

namespace App\Repositories;

use App\Models\alimentacion;
use App\Repositories\BaseRepository;

/**
 * Class alimentacionRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:27 pm UTC
*/

class alimentacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ali_ideps',
        'ali_autorizacion',
        'ali_nropersonas',
        'ali_desayunosautorizados',
        'ali_almuerzosautorizados',
        'ali_comidasautorizadas',
        'ali_lugarentrega',
        'ali_observaciones',
        'ali_idingreso'
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
        $query = Alimentacion::select("*");

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
        return alimentacion::class;
    }
}
