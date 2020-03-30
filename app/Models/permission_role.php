<?php

namespace App\Models;

use Eloquent as Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class permission_role
 * @package App\Models
 * @version August 08, 2019,11:35 pm UTC
 *
 */
class permission_role extends Model
{
    public $table = 'permission_role';
    
    protected $primaryKey = 'ids';

    public $fillable = [
        'permission_id',
        'role_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'permission_id' => 'integer',
        'role_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'permission_id' => 'required',
        'role_id' => 'required'
    ];
}
