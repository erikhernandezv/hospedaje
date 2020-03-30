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
     * Configure the Model
     **/
    public function model()
    {
        return mantenimiento_equipos::class;
    }
}
