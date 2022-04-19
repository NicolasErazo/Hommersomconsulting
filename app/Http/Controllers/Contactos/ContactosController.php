<?php

namespace App\Http\Controllers\Contactos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use App\Models\Contacto;
use Illuminate\Support\Facades\Mail;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contactos.index');
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
        $request->validate([
            'nombre'=>'required',
            'correo'=>'required|email|unique:contactos',
            'pregunta'=>'required',
        ]);

   
        $contacto=new Contacto();
        $contacto->nombre=$request->nombre;
        $contacto->correo=$request->correo;
        $contacto->pregunta=$request->pregunta;
        $contacto->save();


        Mail::to('info@hommersomconsulting.com')->send(new ContactanosMailable($contacto->nombre, $contacto->correo, $contacto->pregunta));
        return view('home');  
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
