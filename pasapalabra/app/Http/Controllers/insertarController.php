<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\palabra;
use DB;
use Exception;
use Response;
use App\Http\Requests\Vpalabras;

class insertarController extends Controller
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
    public function index()
    {
        
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
    public function store(Request $request)
    {
    	if($request->ajax()){
    		
            $pal=new palabra();
            $pal->Palabra = $request->input('Palabra');
            $pal->Descripcion = $request->input('Descripcion');
            $pal->Dificultad = $request->input('Dificultad');
            if($pal->save()){
                return response(['msg'=>'Insertado Correctament']);
            }

    		
    	}
        
       /* $palabras = Palabras::select('id', 'Palabra', 'Descripcion','Dificultad')->paginate(5);*/


         /*if($request->ajax())
        {
            Palabras::create([
                'Palabra' => $request->input('Palabra'),
                'Descripcion' => $request->input('descripcion'),
                'Dificultad' => $request->input('descripcion'),
            ]);
            return response()->json(array('agregar' => $palabras));
        }
        return view('windows.adm')->with('agregar', $palabras);*/
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

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
