<?php

namespace App\Repositories;

use App\Models\eps;
use App\Repositories\BaseRepository;

/**
 * Class epsRepository
 * @package App\Repositories
 * @version March 27, 2020, 9:29 pm UTC
*/

class epsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'eps_nombre'
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
        $query = Eps::select("*");

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
        return eps::class;
    }
}
