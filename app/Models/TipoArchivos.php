<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoArchivos extends Model
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
    //protected $table = 'tipo_archivos';


    public static function traerTipoArchivo()
    {
        $datos = self::all();
        return $datos->pluck('nombre','id_tipo')->all();
    }
     public static function traerTipoSarlaf()
    {
        $datos = self::whereIn('id_tipo',[10,11,12])->get();
        return $datos->pluck('nombre','id_tipo')->all();
    }
}
