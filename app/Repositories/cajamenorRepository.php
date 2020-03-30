<?php

namespace App\Repositories;

use App\Models\cajamenor;
use App\Repositories\BaseRepository;

/**
 * Class cajamenorRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:28 pm UTC
*/

class cajamenorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'caj_idcuidad',
        'caj_fecha',
        'caj_valor',
        'caj_pagadoa',
        'caj_concepto'
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
        $query = Cajamenor::select("*");

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
        return cajamenor::class;
    }
}
