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
     * Configure the Model
     **/
    public function model()
    {
        return vehiculos_revision::class;
    }
}
