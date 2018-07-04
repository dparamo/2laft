<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
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

    protected $table = 'ciudad';

    // public static function traerCiudad($id)
    // {
    //     $datos = self::where('id_departamento',$id);
    //     $consulta = $datos->pluck('nombre','id_ciudad')->get();
    //     return $consulta;
    // }

    // public static function traerIds($id)
    // {
    //     $datos = self::where('id_departamento',$id);
    //     $ids = $datos->pluck('nombre','id_ciudad')->all();
    //     return $ids;
    // }

    public static function traerCiudad()
    {
        $datos = self::all();
        $consulta = $datos->pluck('id_ciudad','nombre')->all();
        return $consulta;
    }

}

