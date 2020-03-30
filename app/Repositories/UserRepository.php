<?php

namespace App\Repositories;

use App\User;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;
use DB;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version June 3, 2019, 9:14 pm UTC
*/

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }

    /**
     * Search el modelo
     **/
    public function search($input)
    {
        $query = User::select("*");

        if (isset($input['id']) && $input['id'] != '') {
            $query->where('id', '=', trim($input['id']));
        }

        if (isset($input['name']) && $input['name'] != '') {
            $query->where('name', "ILIKE", "%" . trim($input['name']) . "%");
        }

        if (isset($input['email']) && $input['email'] != '') {
            $query->where('email', "ILIKE", "%" . trim($input['email']) . "%");
        }
        $query->where('name', '!=', 'administrador');

        return $query;
    }

    /**
     * Save el modelo
     **/
    public function save($input)
    {
        $transaccion = DB::transaction(function () use ($input)
        {
            try {
                $usuarios = $this->create($input);
                return $usuarios;
            } catch (\Exception $e) {
                return false;
            }
        });

        return $transaccion;
    }

    /**
     * Update el modelo
     **/
    public function modify($input, $id)
    {
        $transaccion = DB::transaction(function () use ($input, $id)
        {
            try {
                $usuarios = $this->update($input, $id);
                return $usuarios;
            } catch (\Exception $e) {
                return false;
            }
        });

        return $transaccion;
    }

    /**
     * Diferencia ente el modelos y los campos del formulario donde se realizaron cambios.
     *
     * @param $model, $input
     *
     * @return $diferencia
     **/
    public function isUpdatable($model, $input)
    {
        $arrayDB = $model->getAttributes();
        $result = array_intersect($arrayDB, $input);
        $diferencia = array_diff($input, $result);

        return $diferencia;
    }

    /**
     * Save el modelo
     **/
    public function privilegioSave($input)
    {
        /*$transaccion = DB::transaction(function () use ($input)
        {
            try {*/
                $usuario = $this->find($input['user_id']);
                foreach ($input['roles'] as $key => $value) {
                    $usuario->roles()->attach($value);
                }
                return $usuario;
            /*} catch (\Exception $e) {
                return false;
            }
        });

        return $transaccion;*/
    }

    /**
     * Update el modelo
     **/
    public function privilegioModify($input, $id)
    {
        $transaccion = DB::transaction(function () use ($input, $id)
        {
            try {
                $usuario = $this->find($input['user_id']);
                $roles = explode(",", $input['roless']);
                $input['roles'] = $roles;
                $usuario->roles()->sync($input['roles']);
                return $usuario;
            } catch (\Exception $e) {
                return false;
            }
        });

        return $transaccion;
    }

    /**
     * Update password
     **/
    public function updatePassword($input) {
//dd($input['password'].' ** '.Hash::make($input['password']));
//dd(var_dump($input));
        $transaccion = DB::transaction(function () use ($input)
        {
            try {
                $query = User::where('id', '=', $input['id'])
                     ->update(['password' => Hash::make($input['password']) ]);
                return $query;
            } catch (\Exception $e) {
                return false;
            }
        });

        return $transaccion;
    }
}
