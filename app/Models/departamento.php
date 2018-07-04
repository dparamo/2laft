<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    protected $table = 'departamento';

    public static function traerDepartamento()
    {
        $datos = self::all();
        return $datos->pluck('id_departamento','nombre')->all();
    }
}
