<?php

namespace App\Repositories;

use App\Models\dotacion;
use App\Repositories\BaseRepository;

/**
 * Class dotacionRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:29 pm UTC
*/

class dotacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dot_detalle',
        'dot_valorperdidadano'
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
        return dotacion::class;
    }
}
