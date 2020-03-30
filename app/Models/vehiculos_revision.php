<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vehiculos_revision
 * @package App\Models
 * @version March 27, 2020, 9:36 pm UTC
 *
 * @property \App\Models\Vehiculo vrevehiculo
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property integer vre_idvehiculo
 * @property string vre_fecha
 * @property integer vre_klms
 * @property string vre_fectanqueo
 * @property string vre_revisionaguaobservacion
 * @property string vre_revisionllantasobserva
 * @property string vre_revisionfrenosobserva
 * @property string vre_revisionaceiteobserva
 */
class vehiculos_revision extends Model
{
    use SoftDeletes;

    public $table = 'vehiculos_revision';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'vre_consecutivo';

    public $fillable = [
        'vre_idvehiculo',
        'vre_fecha',
        'vre_klms',
        'vre_fectanqueo',
        'vre_revisionaguaobservacion',
        'vre_revisionllantasobserva',
        'vre_revisionfrenosobserva',
        'vre_revisionaceiteobserva'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'vre_consecutivo' => 'integer',
        'vre_idvehiculo' => 'integer',
        'vre_fecha' => 'date',
        'vre_klms' => 'integer',
        'vre_fectanqueo' => 'date',
        'vre_revisionaguaobservacion' => 'string',
        'vre_revisionllantasobserva' => 'string',
        'vre_revisionfrenosobserva' => 'string',
        'vre_revisionaceiteobserva' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'vre_consecutivo' => 'required',
        'vre_idvehiculo' => 'required',
        'vre_fecha' => 'required',
        'vre_klms' => 'required',
        'vre_fectanqueo' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function vrevehiculo()
    {
        return $this->belongsTo(\App\Models\Vehiculo::class, 'vre_idvehiculo');
    }
}
