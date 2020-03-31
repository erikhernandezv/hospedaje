<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class equipos
 * @package App\Models
 * @version March 27, 2020, 9:30 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection meqequipos
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property string equ_nombre
 * @property string equ_descripcion
 */
class equipos extends Model
{
    use SoftDeletes;

    public $table = 'equipos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'equ_consecutivo';

    public $fillable = [
        'equ_nombre',
        'equ_descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'equ_consecutivo' => 'integer',
        'equ_nombre' => 'string',
        'equ_descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        /*'equ_consecutivo' => 'required',
        'equ_nombre' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'*/
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function meqequipos()
    {
        return $this->hasMany(\App\Models\MantenimientoEquipo::class, 'meq_idequipo');
    }
}
