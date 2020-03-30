<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class servicio
 * @package App\Models
 * @version March 27, 2020, 9:33 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection ingresos
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property string ser_nombre
 * @property float ser_valunitario
 */
class servicio extends Model
{
    use SoftDeletes;

    public $table = 'servicio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'ser_consecutivo';

    public $fillable = [
        'ser_nombre',
        'ser_valunitario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ser_consecutivo' => 'integer',
        'ser_nombre' => 'string',
        'ser_valunitario' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ser_consecutivo' => 'required',
        'ser_nombre' => 'required',
        'ser_valunitario' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function ingresos()
    {
        return $this->belongsToMany(\App\Models\Ingreso::class, 'ingresos_servicio');
    }
}
