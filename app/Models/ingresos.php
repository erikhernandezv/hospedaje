<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ingresos
 * @package App\Models
 * @version March 27, 2020, 9:31 pm UTC
 *
 * @property \App\Models\Persona ingpersona
 * @property \App\Models\Ep ingeps
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection servicios
 * @property \Illuminate\Database\Eloquent\Collection eps
 * @property \Illuminate\Database\Eloquent\Collection dotacions
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property integer ing_idpersona
 * @property string ing_habitacionasignada
 * @property string ing_horaingreso
 * @property integer ing_ideps
 */
class ingresos extends Model
{
    use SoftDeletes;

    public $table = 'ingresos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'ing_consecutivo';

    public $fillable = [
        'ing_idpersona',
        'ing_habitacionasignada',
        'ing_horaingreso',
        'ing_ideps'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ing_consecutivo' => 'integer',
        'ing_idpersona' => 'integer',
        'ing_habitacionasignada' => 'string',
        'ing_horaingreso' => 'string',
        'ing_ideps' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ing_consecutivo' => 'required',
        'ing_idpersona' => 'required',
        'ing_habitacionasignada' => 'required',
        'ing_horaingreso' => 'required',
        'ing_ideps' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ingpersona()
    {
        return $this->belongsTo(\App\Models\Persona::class, 'ing_idpersona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ingeps()
    {
        return $this->belongsTo(\App\Models\Ep::class, 'ing_ideps');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function servicios()
    {
        return $this->belongsToMany(\App\Models\Servicio::class, 'ingresos_servicio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function eps()
    {
        return $this->belongsToMany(\App\Models\Ep::class, 'alimentacion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function dotacions()
    {
        return $this->belongsToMany(\App\Models\Dotacion::class, 'dotacion_hospedaje');
    }
}
