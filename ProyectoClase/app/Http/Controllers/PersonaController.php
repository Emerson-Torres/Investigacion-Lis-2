<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use Illuminate\Support\Facades\DB;
use App\Models\ocupaciones;
class PersonaController extends Controller
{
    public function index(){
        $cuentas = DB::table('personas')
            ->join('ocupaciones', 'personas.id_ocupacion', '=', 'ocupaciones.id')
            ->select('personas.*', 'ocupaciones.ocupacion','personas.id_ocupacion')
            ->get();
        return $cuentas;
    }

    
    public function registrarPersona(Request $request)
    {
        $nombre = $request->get('txtnombre');
        $edad = $request->get('txtedad');
        $telefono = $request->get('txttelefono');
        $sexo = $request->get('cmbsexo');
        $fecha = $request->get('txtfecha');
        $ocupacion = $request->get('cmbocupacion');
        

        persona::create([
            'nombre_persona' => $nombre,
            'edad_persona' => $edad,
            'telefono_persona' => $telefono,
            'sexo_persona' => $sexo,
            'fecha_nac' => $fecha,
            'id_ocupacion' => $ocupacion
        ]);

        return 'http://127.0.0.1:8001/index';
    }

    public function modificarPersona(Request $request)
    {
        $id = $request->get('id');
        $nombre = $request->get('txtnombremod');
        $edad = $request->get('txtedadmod');
        $telefono = $request->get('txttelefonomod');
        $sexo = $request->get('cmbsexomod');
        $fecha = $request->get('txtfechamod');
        $ocupacion = $request->get('cmbocupacionmod');
        

        persona::where('id',$id)->update([
            'nombre_persona' => $nombre,
            'edad_persona' => $edad,
            'telefono_persona' => $telefono,
            'sexo_persona' => $sexo,
            'fecha_nac' => $fecha,
            'id_ocupacion' => $ocupacion
        ]);

        return 'http://127.0.0.1:8001/index';
    }

        
    public function eliminarPersona(Request $request)
    {
        persona::destroy($request->id);     
        return 'http://127.0.0.1:8001/index';
    }
}
