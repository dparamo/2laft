<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoArchivos;
use App\Models\Archivos;


class SarlafController extends Controller
{
    
  public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function index()
	{
	  $datos=TipoArchivos::traerTipoSarlaf();
    $archivos=Archivos::all();

		return \View::make('sarlaf.index',['datos'=>$datos,'archivos'=>$archivos]);
	}

	public function save(Request $request)
	{
 
       //obtenemos el campo file definido en el formulario
       $file = $request->file('file');
       $user = $request->name;
       $tabla= $request->all();
       $tipo = $tabla['id_tipo_servicio'];
       $archivos=Archivos::all();
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));

       Archivos::create([
             'id_nombre' => $tipo,
            'id_usuario' =>$user,
             'url' => $nombre,
         ]);

       $datos=TipoArchivos::traerTipoSarlaf();
 
        //return redirect('sarlaf.index',['datos'=>$datos,'archivos'=>$archivos]);
       return redirect()->action('SarlafController@index');
  }
}
