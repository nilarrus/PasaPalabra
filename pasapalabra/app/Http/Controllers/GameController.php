<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\palabra;
use DB;

class GameController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('windows.game');
    }
    public function palabrasRosco(Request $request)
    {
        $dif = $request->input('dificultad');
        $letra = $request->input('letra');
        try {
            $palabras = DB::table('palabras')
            ->where('Dificultad','LIKE',$dif)
            ->where('Letra','LIKE',$letra)
            ->orderBy('Letra','ASC')
            ->get(['id','Palabra','Tipo','Letra','Descripcion','Dificultad']);
            //var_dump($palabras);
            return $palabras;
        } catch (\Exception $ex) {
            echo "\nError del server ".$ex;
            //return back()->withErrors(['Error'=>'Error del servidor']);
        }
    }
    public function verificarPalabra(Request $request)
    {
        $id = $request->input('id');
        try {
            $palabraServer = DB::table('palabras')
            ->where('id','LIKE',$id)
            ->get(['Palabra']);
            return $palabraServer;
        } catch (\Exception $ex) {
            echo "\nError del server ".$ex;
        }
    }
}
