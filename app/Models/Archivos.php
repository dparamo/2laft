<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','id_nombre','id_usuario','url'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];


    public static function traerUrl()
    {
        $datos = self::all();
        $consulta = $datos->pluck('id','url')->all();
        return $consulta;
    }

    public static function traerNombre()
    {
        $datos = self::all();
        $consulta = $datos->pluck('id','id_usuario')->all();
        return $consulta;
    }

}
