<?php

namespace App\Repositories;

use App\Models\equipos;
use App\Repositories\BaseRepository;

/**
 * Class equiposRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:30 pm UTC
*/

class equiposRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'equ_nombre',
        'equ_descripcion'
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
        return equipos::class;
    }
}
