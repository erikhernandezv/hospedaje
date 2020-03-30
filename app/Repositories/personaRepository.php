<?php

namespace App\Repositories;

use App\Models\persona;
use App\Repositories\BaseRepository;

/**
 * Class personaRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:33 pm UTC
*/

class personaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'per_nombre1',
        'per_nombre2',
        'per_apellido1',
        'per_apellido2',
        'per_tipdoc',
        'per_numdoc',
        'per_direccion',
        'per_telefono',
        'per_idmunicipio'
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
        return persona::class;
    }
}
