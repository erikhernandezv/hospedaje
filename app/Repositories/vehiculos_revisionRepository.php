<?php

namespace App\Repositories;

use App\Models\vehiculos_revision;
use App\Repositories\BaseRepository;

/**
 * Class vehiculos_revisionRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:36 pm UTC
*/

class vehiculos_revisionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'vre_idvehiculo',
        'vre_fecha',
        'vre_klms',
        'vre_fectanqueo',
        'vre_revisionaguaobservacion',
        'vre_revisionllantasobserva',
        'vre_revisionfrenosobserva',
        'vre_revisionaceiteobserva'
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
        $query = Vehiculos_revision::select("*");

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
        return vehiculos_revision::class;
    }
}
