<?php

namespace App\Repositories;

use App\Models\permission_role;
use App\Repositories\BaseRepository;

/**
 * Class PermissionRoleRepository.
 * @package App\Repositories
 * @version August 08, 2019, 11:49 pm UTC
 */
class PermissionRoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'permission_id',
        'role_id'
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
    /*public function search($input)
    {
        $query = permission_role::select("*")
                ->join('permission_role', 'permission_id', '=', 'permissions.id')
        ->where('role_id', $input['id']);

        if (isset($input['_consecutivo']) && $input['_consecutivo'] != '') {
            $query->where('_consecutivo', '=', trim($input['_consecutivo']));
        }

        if (isset($input['_descripcion']) && $input['_descripcion'] != '') {
            $query->where('_descripcion', "ILIKE", "%" . trim($input['_descripcion']) . "%");
        }

        return $query;
    }*/

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return permission_role::class;
    }
   
}
