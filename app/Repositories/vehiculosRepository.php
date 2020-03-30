<?php

namespace App\Repositories;

use App\Models\vehiculos;
use App\Repositories\BaseRepository;

/**
 * Class vehiculosRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:36 pm UTC
*/

class vehiculosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'vei_marca',
        'vei_modelo',
        'vei_placa',
        'vei_numerochasis',
        'vei_fecpoliza',
        'vei_feclimitesoat',
        'vei_feclimitetecnomecanica'
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
        return vehiculos::class;
    }
}
