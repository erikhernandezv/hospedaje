<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class cajamenor
 * @package App\Models
 * @version March 27, 2020, 9:28 pm UTC
 *
 * @property \App\Models\Persona cajPagadoa
 * @property \App\Models\Municipio cajcuidad
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property integer caj_idcuidad
 * @property string caj_fecha
 * @property float caj_valor
 * @property integer caj_pagadoa
 * @property string caj_concepto
 */
class cajamenor extends Model
{
    use SoftDeletes;

    public $table = 'cajamenor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'caj_consecutivo';

    public $fillable = [
        'caj_idcuidad',
        'caj_fecha',
        'caj_valor',
        'caj_pagadoa',
        'caj_concepto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'caj_consecutivo' => 'integer',
        'caj_idcuidad' => 'integer',
        'caj_fecha' => 'date',
        'caj_valor' => 'float',
        'caj_pagadoa' => 'integer',
        'caj_concepto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'caj_consecutivo' => 'required',
        'caj_idcuidad' => 'required',
        'caj_fecha' => 'required',
        'caj_valor' => 'required',
        'caj_pagadoa' => 'required',
        'caj_concepto' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cajPagadoa()
    {
        return $this->belongsTo(\App\Models\Persona::class, 'caj_pagadoa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cajcuidad()
    {
        return $this->belongsTo(\App\Models\Municipio::class, 'caj_idcuidad');
    }
}
