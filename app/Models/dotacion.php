<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class dotacion
 * @package App\Models
 * @version March 27, 2020, 9:29 pm UTC
 *
 * @property string dot_detalle
 * @property float dot_valorperdidadano
 */
class dotacion extends Model
{
    use SoftDeletes;

    public $table = 'dotacion';
    protected $dateFormat = 'H:i:s';

    protected $dates = ['deleted_at','created_at', 'updated_at',];

    protected $primaryKey = 'dot_consecutivo';

    public $fillable = [
        'dot_detalle',
        'dot_valorperdidadano',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dot_detalle' => 'string',
        'dot_valorperdidadano' => 'float',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        /*'dot_detalle' => 'required|max:255|unique:dotacion,dot_detalle,NULL,dot_consecutivo,deleted_at,NULL',
        'dot_valorperdidadano' => 'required|numeric|min:0|max:10000000',*/
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function ingresos()
    {
        return $this->belongsToMany(\App\Models\Ingreso::class, 'dotacion_hospedaje');
    }
}
