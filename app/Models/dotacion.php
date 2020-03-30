<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class dotacion
 * @package App\Models
 * @version March 27, 2020, 9:29 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection ingresos
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property string dot_detalle
 * @property float dot_valorperdidadano
 */
class dotacion extends Model
{
    use SoftDeletes;

    public $table = 'dotacion';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'dot_consecutivo';

    public $fillable = [
        'dot_detalle',
        'dot_valorperdidadano'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dot_consecutivo' => 'integer',
        'dot_detalle' => 'string',
        'dot_valorperdidadano' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dot_consecutivo' => 'required',
        'dot_detalle' => 'required',
        'dot_valorperdidadano' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function ingresos()
    {
        return $this->belongsToMany(\App\Models\Ingreso::class, 'dotacion_hospedaje');
    }
}
