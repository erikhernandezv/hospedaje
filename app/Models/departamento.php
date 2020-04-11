<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class municipio
 * @package App\Models
 * @version April 08, 2020, 18:46 pm UTC
 *
 * @property string dep_departamento
 */
class departamento extends Model
{
    use SoftDeletes;

    public $table = 'departamento';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    protected $primaryKey = 'dep_consecutivo';

    public $fillable = [
        'dep_departamento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dep_consecutivo' => 'integer',
        'dep_departamento' => 'string'
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
    public function departamentos()
    {
        return $this->hasOne(\App\Models\municipio::class, 'dep_consecutivo');
    }

}
