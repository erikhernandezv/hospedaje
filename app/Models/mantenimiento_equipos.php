<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class mantenimiento_equipos
 * @package App\Models
 * @version March 27, 2020, 9:31 pm UTC
 *
 * @property \App\Models\Equipo meqequipo
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property integer meq_idequipo
 * @property boolean meq_programada
 * @property string meq_fechaprogramada
 * @property boolean med_ejecutada
 */
class mantenimiento_equipos extends Model
{
    use SoftDeletes;

    public $table = 'mantenimiento_equipos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'meq_consecutivo';

    public $fillable = [
        'meq_idequipo',
        'meq_programada',
        'meq_fechaprogramada',
        'med_ejecutada'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'meq_consecutivo' => 'integer',
        'meq_idequipo' => 'integer',
        'meq_programada' => 'boolean',
        'meq_fechaprogramada' => 'date',
        'med_ejecutada' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'meq_consecutivo' => 'required',
        'meq_idequipo' => 'required',
        'meq_programada' => 'required',
        'med_ejecutada' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function meqequipo()
    {
        return $this->belongsTo(\App\Models\Equipo::class, 'meq_idequipo');
    }
}
