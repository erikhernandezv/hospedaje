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
     * Search el modelo
     **/
    public function search($input)
    {
        $query = Servicio::select("*");

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
        return servicio::class;
    }
}
