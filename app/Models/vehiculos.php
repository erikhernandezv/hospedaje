<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vehiculos
 * @package App\Models
 * @version March 27, 2020, 9:36 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection vrevehiculos
 * @property string vei_marca
 * @property string vei_modelo
 * @property string vei_placa
 * @property string vei_numerochasis
 * @property string vei_fecpoliza
 * @property string vei_feclimitesoat
 * @property string vei_feclimitetecnomecanica
 */
class vehiculos extends Model
{
    use SoftDeletes;

    public $table = 'vehiculos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'vei_consecutivo';

    public $fillable = [
        'vei_marca',
        'vei_modelo',
        'vei_placa',
        'vei_numerochasis',
        'vei_fecpoliza',
        'vei_feclimitesoat',
        'vei_feclimitetecnomecanica'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'vei_consecutivo' => 'integer',
        'vei_marca' => 'string',
        'vei_modelo' => 'string',
        'vei_placa' => 'string',
        'vei_numerochasis' => 'string',
        'vei_fecpoliza' => 'date',
        'vei_feclimitesoat' => 'date',
        'vei_feclimitetecnomecanica' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        /*'vei_consecutivo' => 'required',
        'vei_marca' => 'required',
        'vei_modelo' => 'required',
        'vei_placa' => 'required',
        'vei_numerochasis' => 'required',
        'vei_fecpoliza' => 'required',
        'vei_feclimitesoat' => 'required',
        'vei_feclimitetecnomecanica' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'*/
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vrevehiculos()
    {
        return $this->hasMany(\App\Models\VehiculosRevision::class, 'vre_idvehiculo');
    }
}
