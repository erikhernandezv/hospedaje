<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends EntrustRole
{
  //use SoftDeletes;

  	public function perms()
    {
        return $this->belongsToMany(\App\Permission::class, 'permission_role', 'role_id', 'permission_id');
    }
}
