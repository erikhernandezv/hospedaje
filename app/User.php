<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait {
        can as traitCan;
        hasRole as traitHasRole;
    }
    use SoftDeletes { SoftDeletes::restore insteadof EntrustUserTrait; }
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:255',
        'email' => 'required|max:255|unique:users',
        //'password' => 'required'
    ];

    /*public function roles()
    {
        //return $this->hasOne(\App\Models\RoleUser::class);
        return $this->belongsToMany(\App\Models\roles::class, 'role_user', 'user_id', 'role_id');
    }*/
}
