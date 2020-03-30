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
     * Configure the Model
     **/
    public function model()
    {
        return cajamenor::class;
    }
}
