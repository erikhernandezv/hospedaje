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
     * Configure the Model
     **/
    public function model()
    {
        return ingresos::class;
    }
}
