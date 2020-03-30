<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class alimentacion
 * @package App\Models
 * @version March 27, 2020, 9:27 pm UTC
 *
 * @property \App\Models\Ep alieps
 * @property \App\Models\Ingreso aliingreso
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection alealimentacions
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property integer ali_ideps
 * @property string ali_autorizacion
 * @property integer ali_nropersonas
 * @property integer ali_desayunosautorizados
 * @property integer ali_almuerzosautorizados
 * @property integer ali_comidasautorizadas
 * @property string ali_lugarentrega
 * @property string ali_observaciones
 * @property integer ali_idingreso
 */
class alimentacion extends Model
{
    use SoftDeletes;

    public $table = 'alimentacion';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'ali_consecutivo';

    public $fillable = [
        'ali_ideps',
        'ali_autorizacion',
        'ali_nropersonas',
        'ali_desayunosautorizados',
        'ali_almuerzosautorizados',
        'ali_comidasautorizadas',
        'ali_lugarentrega',
        'ali_observaciones',
        'ali_idingreso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ali_consecutivo' => 'integer',
        'ali_ideps' => 'integer',
        'ali_autorizacion' => 'string',
        'ali_nropersonas' => 'integer',
        'ali_desayunosautorizados' => 'integer',
        'ali_almuerzosautorizados' => 'integer',
        'ali_comidasautorizadas' => 'integer',
        'ali_lugarentrega' => 'string',
        'ali_observaciones' => 'string',
        'ali_idingreso' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ali_consecutivo' => 'required',
        'ali_ideps' => 'required',
        'ali_nropersonas' => 'required',
        'ali_desayunosautorizados' => 'required',
        'ali_almuerzosautorizados' => 'required',
        'ali_comidasautorizadas' => 'required',
        'ali_lugarentrega' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',
        'ali_idingreso' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function alieps()
    {
        return $this->belongsTo(\App\Models\Ep::class, 'ali_ideps');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function aliingreso()
    {
        return $this->belongsTo(\App\Models\Ingreso::class, 'ali_idingreso');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function alealimentacions()
    {
        return $this->hasMany(\App\Models\AlimentacionEntrega::class, 'ale_idalimentacion');
    }
}
