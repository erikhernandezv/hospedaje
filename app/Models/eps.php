<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class eps
 * @package App\Models
 * @version March 27, 2020, 9:29 pm UTC
 *
 * @property string eps_nombre
 */
class eps extends Model
{
    use SoftDeletes;

    public $table = 'eps';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'eps_consecutivo';

    public $fillable = [
        'eps_nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'eps_consecutivo' => 'integer',
        'eps_nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'eps_consecutivo' => 'required',
        'eps_nombre' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function personas()
    {
        return $this->belongsToMany(\App\Models\Persona::class, 'tiqueteintermunicipal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function ingresos()
    {
        return $this->belongsToMany(\App\Models\Ingreso::class, 'alimentacion');
    }

}
