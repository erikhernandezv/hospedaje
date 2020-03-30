<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class persona
 * @package App\Models
 * @version March 27, 2020, 9:33 pm UTC
 *
 * @property string per_nombre1
 * @property string per_nombre2
 * @property string per_apellido1
 * @property string per_apellido2
 * @property integer per_tipdoc
 * @property string per_numdoc
 * @property string per_direccion
 * @property string per_telefono
 * @property integer per_idmunicipio
 */
class persona extends Model
{
    use SoftDeletes;

    public $table = 'persona';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'per_consecutivo';

    public $fillable = [
        'per_nombre1',
        'per_nombre2',
        'per_apellido1',
        'per_apellido2',
        'per_tipdoc',
        'per_numdoc',
        'per_direccion',
        'per_telefono',
        'per_idmunicipio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'per_consecutivo' => 'integer',
        'per_nombre1' => 'string',
        'per_nombre2' => 'string',
        'per_apellido1' => 'string',
        'per_apellido2' => 'string',
        'per_tipdoc' => 'integer',
        'per_numdoc' => 'string',
        'per_direccion' => 'string',
        'per_telefono' => 'string',
        'per_idmunicipio' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'per_consecutivo' => 'required',
        'per_nombre1' => 'required',
        'per_apellido1' => 'required',
        'per_tipdoc' => 'required',
        'per_numdoc' => 'required',
        'per_idmunicipio' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function permunicipio()
    {
        return $this->belongsTo(\App\Models\Municipio::class, 'per_idmunicipio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ttupersonas()
    {
        return $this->hasMany(\App\Models\TrasladoTiqurbano::class, 'ttu_idpersona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function eps()
    {
        return $this->belongsToMany(\App\Models\Ep::class, 'tiqueteintermunicipal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function municipios()
    {
        return $this->belongsToMany(\App\Models\Municipio::class, 'cajamenor');
    }

}
