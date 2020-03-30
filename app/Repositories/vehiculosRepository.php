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
     * Search el modelo
     **/
    public function search($input)
    {
        $query = Vehiculos::select("*");

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
        return vehiculos::class;
    }
}
