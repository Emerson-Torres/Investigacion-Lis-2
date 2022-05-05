<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;
use App\Models\ocupaciones;
use Illuminate\Support\Facades\Http;
class PersonaController extends Controller
{
    public function index(){
        $lista = HTTP::get('http://127.0.0.1:8000/api/index');
        $listaarray=$lista->json();
        $lista2 = ocupaciones::all();
        
        return view('index',['listaPersonas'=> $listaarray],['listaOcupaciones'=> $lista2]);
    }

    public function registrarPersona(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8000/api/registrarPersona', $request->input());

        return redirect()->route('index');
    }
    public function modificarPersona(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8000/api/modificarPersona', $request->input());

        return redirect()->route('index');
    }
    public function eliminarPersona($id)
    {
        
        
        $response = Http::get('http://127.0.0.1:8000/api/eliminarPersona/' . $id);

        return redirect()->route('index');
    }
}
