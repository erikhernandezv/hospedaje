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
     * Configure the Model
     **/
    public function model()
    {
        return alimentacion::class;
    }
}
