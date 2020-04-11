<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class municipio
 * @package App\Models
 * @version April 08, 2020, 18:46 pm UTC
 *
 * @property string mun_municipio
 * @property string mun_iddepto
 */
class municipio extends Model
{
    use SoftDeletes;

    public $table = 'municipio';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    protected $primaryKey = 'mun_consecutivo';

    public $fillable = [
        'mun_municipio',
        'mun_iddepto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'mun_consecutivo' => 'integer',
        'mun_municipio' => 'string',
        'mun_iddepto' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function municipios()
    {
        return $this->hasOne(\App\Models\persona::class, 'mun_consecutivo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function departamentos()
    {
        return $this->belongsTo(\App\Models\departamento::class, 'mun_iddepto');
    }

}