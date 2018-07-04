<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\TipoServicio;
use App\Models\Departamento;
use App\Models\Ciudad;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nit_entidad' => 'required|string|max:15',
            'razon_social' => 'required|string|max:120',
            'direccion' => 'required|string|max:100',
            'telefono' => 'required|string|max:15',
            'celular' => 'required|string|max:15',
            'resolucion_licencia' => 'required|string|max:15',
            'fecha_resolucion' => 'required|string|max:100',
            'fecha_notificacion' => 'required|string|max:100',
            'anios_licencia' => 'required|integer|max:5',
            'fecha_vencimiento' => 'required|string|max:100',
            'id_tipo_servicio' => 'required|integer|max:100',
            'id_departamento' => 'required|integer|max:500',
            'id_ciudad' => 'required|integer|max:500',
            'tipo_persona' => 'required|string|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nit_entidad' => $data['nit_entidad'],
            'razon_social' => $data['razon_social'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'celular' => $data['celular'],
            'resolucion_licencia'=> $data['resolucion_licencia'],
            'fecha_resolucion' => $data['fecha_resolucion'],
            'fecha_notificacion' => $data['fecha_notificacion'],
            'anios_licencia' => $data['anios_licencia'],
            'fecha_vencimiento' => $data['fecha_vencimiento'],
            'id_tipo_servicio' => $data['id_tipo_servicio'],
            'id_departamento' => $data['id_departamento'],
            'id_ciudad' => $data['id_ciudad'],
            'tipo_persona' => $data['tipo_persona'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $datos=TipoServicio::traerTiposServicio();
        $deptos=Departamento::traerDepartamento();
        $ciudades=Ciudad::traerCiudad();
        
        
        

        
        return view('auth.register',['datos' => $datos,'deptos'=>$deptos,'ciudades'=>$ciudades]);
    }

    public function getCity($id) 
    {   
        $datos = Ciudad::where('id_departamento',$id)->get();
        return $datos;
    }

}
