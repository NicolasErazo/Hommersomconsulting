<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\DetalleServicio;
class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $servicios = Servicio::all();
        return view('servicios.index',compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateServicio($request);
                //dd($request->descripcion_servicio[2]==null);
        for ($i = 0; $i < count($request->descripcion_servicio); $i++) {

            if($request->descripcion_servicio[$i]==null){
                if(session()->get('lenguaje')=='espanol'){
                    return back()->with('error','Ingrese todas las descripciones.')->withInput($request->input());
                }else{
                    return back()->with('error','Enter all descriptions.')->withInput($request->input());

                }
            }
        } 
        if($request->hasFile('imagen_servicio')!= false){
            $file=$request->file('imagen_servicio');
            $nombrearchivo=time().$file->getClientOriginalName();
            $nombrearchivo =str_replace(' ', '', $nombrearchivo);
            $file->move('img/',$nombrearchivo);
 
        }else{
            $nombrearchivo=null;
        }

        $servicio=new Servicio();
        $servicio->nombre_servicio=$request->nombre_servicio;
        $servicio->tipo=$request->tipo;
        $servicio->imagen_servicio=$nombrearchivo;
        $servicio->save();
        
        for ($i = 0; $i < count($request->descripcion_servicio); $i++) {
            $detalle_servicio=new DetalleServicio();
            $detalle_servicio->descripcion_servicio=$request->descripcion_servicio[$i];
            $detalle_servicio->id_servicio=$servicio->id;
            $detalle_servicio->save();
        }
        if(session()->get('lenguaje')=='espanol'){
            return redirect()->route('servicios.index')->withSuccess('Servicio agregado correctamente.');
        }else{
            return redirect()->route('servicios.index')->withSuccess('Service added successfully.');

        }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio= Servicio::find($id);
        $detalle= DetalleServicio::where('id_servicio','=',$servicio->id)->get(); 
        return view('servicios.edit',compact('servicio','detalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request);
        $this->validateServicio($request);
                //dd($request->descripcion_servicio[2]==null);
               
        for ($i = 0; $i < count($request->descripcion_servicio); $i++) {

            if($request->descripcion_servicio[$i]==null){
                if(session()->get('lenguaje')=='espanol'){
                    return back()->with('error','Ingrese todas las descripciones.')->withInput($request->input());
                }else{
                    return back()->with('error','Enter all descriptions.')->withInput($request->input());

                }
            }
        } 

        $servicio= Servicio::find($request->id);
        $servicio->nombre_servicio=$request->nombre_servicio;
        $servicio->tipo=$request->tipo;
        if($request->hasFile('imagen_servicio')!= false){
            $file=$request->file('imagen_servicio');
            $nombrearchivo=time().$file->getClientOriginalName();
            $nombrearchivo =str_replace(' ', '', $nombrearchivo);
            $file->move('img/',$nombrearchivo);
 
            $servicio->imagen_servicio=$nombrearchivo;
        }
        $servicio->save();

        $detalle= DetalleServicio::where('id_servicio','=',$servicio->id)->delete(); 
        
        for ($i = 0; $i < count($request->descripcion_servicio); $i++) {
            $detalle_servicio=new DetalleServicio();
            $detalle_servicio->descripcion_servicio=$request->descripcion_servicio[$i];
            $detalle_servicio->id_servicio=$servicio->id;
            $detalle_servicio->save();
        }
        if(session()->get('lenguaje')=='espanol'){
            return redirect()->route('servicios.index')->withSuccess('Servicio editado correctamente.');
        }else{
            return redirect()->route('servicios.index')->withSuccess('Service edited successfully.');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio= Servicio::find($id);
        $detalle= DetalleServicio::where('id_servicio','=',$servicio->id)->delete(); 
        $servicio->delete();
        if(session()->get('lenguaje')=='espanol'){
            return redirect()->route('servicios.index')->withSuccess('Servicio eliminado correctamente.');
        }else{
            return redirect()->route('servicios.index')->withSuccess('Service removed successfully.');

        }
    }

    public function validateServicio(Request $request)
    {

        $rules = [
            'tipo' => [
                'required',
                'max:255'
            ],
            'nombre_servicio' => [
                'required',
                'max:255'
            ],
        ];
        if(session()->get('lenguaje')=='espanol'){
            $messages = [
                'tipo.required' => 'Por favor ingrese el :attribute',
                'tipo.max' => 'El :attribute no puede superar los 255 caracteres',
                'nombre_servicio.required' => 'Por favor ingrese el :attribute',
                'nombre_servicio.max' => 'El :attribute no puede superar los 255 caracteres',
            ];
        }else{
            $messages = [
                'tipo.required' => 'Please enter the :attribute',
                'tipo.max' => 'The :attribute cannot exceed 255 characters',
                'nombre_servicio.required' => 'Please enter the :attribute',
                'nombre_servicio.max' => 'The :attribute cannot exceed 255 characters',
            ];

        }
        if(session()->get('lenguaje')=='espanol'){
            $attributes = [
                'tipo' => 'tipo de servicio',
                'nombre_servicio' => 'nombre de servicio'
            ];
        }else{
            $attributes = [
                'tipo' => 'type of service',
                'nombre_servicio' => 'name of service'
            ];

        }


       
        return $request->validate($rules,$messages,$attributes);
    }
}
