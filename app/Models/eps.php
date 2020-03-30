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
    //protected $dateFormat = 'H:i:s';

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
        'eps_nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        //'eps_nombre' => 'required|max:255|unique:eps,eps_nombre,$this->route("eps"),eps_consecutivo,deleted_at,NULL'  
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
