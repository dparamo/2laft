<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nit_entidad','razon_social','direccion','telefono','celular','resolucion_licencia',
        'fecha_resolucion','fecha_notificacion','anios_licencia','fecha_vencimiento',
        'id_tipo_servicio','id_departamento','id_ciudad','tipo_persona','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
