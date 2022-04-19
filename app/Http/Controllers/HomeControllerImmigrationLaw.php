<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\DetalleServicio;

class HomeControllerImmigrationLaw extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $servicios = Servicio::all();
        return view('ImmigrationLaw',compact('servicios'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDetalle(Request $request)
    {
        $detalle= DetalleServicio::where('id_servicio','=',$request->id)->get();   
        
        return response()->json($detalle); 
    }

}