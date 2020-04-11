<?php

namespace App\Repositories;

use App\Models\municipio;
use DB;
use App\Repositories\BaseRepository;
/**
 * Interface MunicipioRepositoryRepository.
 *
 * @package namespace App\Repositories;
 */
class MunicipioRepository extends BaseRepository
{
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
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return municipio::class;
    }

    public function municipio() {
        $municipio = Municipio::get();
        return $municipio;
    }
}
