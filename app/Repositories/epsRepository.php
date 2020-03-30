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
     * Configure the Model
     **/
    public function model()
    {
        return eps::class;
    }
}
