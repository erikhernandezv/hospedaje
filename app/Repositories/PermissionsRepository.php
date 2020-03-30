<?php

namespace App\Repositories;

use App\Models\permissions;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;
/*use App\Entities\TempTransaccionRips;
use App\Repositories\DBC;
use DB;*/

/**
 * Class PermissionsRepository.
 * @package App\Repositories
 * @version August 08, 2019, 9:02 pm UTC
 */

class PermissionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'display_name',
        'description'
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
    public function searchAll($input)
    {
        $query = permissions::select("*")
                ->join('permission_role', 'permission_id', '=', 'permissions.id')
                ->join('role_user', 'permission_role.role_id','=','role_user.role_id')
                ->where('permission_role.role_id', $input['id'])
                ->where('role_user.user_id', Auth::id());

        return $query;
    }

    /**
     * Search el modelo
     **/
    public function search($input)
    {
        $query = permissions::select("*")
                /*->join('permission_role', 'permission_id', '=', 'permissions.id')*/
                ->whereNotIn('permissions.id', function($query) {
                        $query->select('permission_id')
                        ->from("permission_role")
                        ->join('role_user','permission_role.role_id','=','role_user.role_id')
                        ->where('role_user.user_id', Auth::id())
                        ->get();
                    });//->where('role_id', $input['id']);

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
        return permissions::class;
    }

    public function getAllPermissions(){
        $allPermissions = permissions::orderBy('display_name', 'ASC')->paginate(15);
        return $allPermissions;
    }
}
