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
    public function filtro(Request $request)
    {
        if ($request->ajax()) {
            $query=$request->get('query');
            if ($query !='') {
                $data=DB::table('palabras')->where('Palabra', 'like', '%'.$query.'%')->orWhere('Descripcion', 'like', '%'.$query.'%')->orWhere('Dificultad', 'like', '%'.$query.'%')->orWhere('Tipo', 'like', '%'.$query.'%')->orWhere('Letra', 'like', '%'.$query.'%')->orderBy('id', 'desc')->get();

                
            }else
            {
                $data=DB::table('palabras')->orderBy('id','desc')->get();

            }
            $total_filas=$data->count();
            if ($total_filas>0) {
                foreach ($data as $fila ) {
                    $output .='<tr>
                    <td>'.$fila->Letra.'</td>
                    <td>'.$fila->Palabra.'</td>
                    <td>'.$fila->Tipo.'</td>
                    <td>'.$fila->Descripcion.'</td>
                    <td>'.$fila->Dificultad.'</td>
                    </tr>';
                   
                }
            }
            else{
                $output='No data found';

            }
            $data=array(
                'table_data' =>$output,
                'total_data' =>$total_data
            );

            echo json_encode($data);
            
        }
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
