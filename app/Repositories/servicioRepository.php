<?php

namespace App\Repositories;

use App\Models\servicio;
use App\Repositories\BaseRepository;

/**
 * Class servicioRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:33 pm UTC
*/

class servicioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ser_nombre',
        'ser_valunitario'
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
        return servicio::class;
    }
}
