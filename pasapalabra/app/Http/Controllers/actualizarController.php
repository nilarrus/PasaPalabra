<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\palabra;
use DB;
use Exception;
use Response;
use App\Http\Requests\Vpalabras;

class actualizarController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         try
        {
            $pal = DB::table('palabras')->where('id', $id)->get();
            
            return view('windows.update', ['pal'=>$pal]);
        }catch(Exception $e)
        {
            return back()->withErrors(['Error'=>'Error del servidor']);
        }
        
        

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Vpalabras $request)
    {
    	

    		
    }


    public function update(Request $request)
    {
    	
    	if ($request->ajax()) {
    		return response(palabra::find($request->id));
    	}


    		
    }

   
        
       
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
         
            $pal=palabra::find($request->id);
            $pal->Letra = $request->input('Letra');
            $pal->Palabra = $request->input('Palabra');
            $pal->Tipo = $request->input('Tipo');
            $pal->Descripcion = $request->input('Descripcion');
            $pal->Dificultad = $request->input('Dificultad');
            $pal->save();
            

            return view("windows.adm");
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
