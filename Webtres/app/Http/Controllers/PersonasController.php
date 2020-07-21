<?php

namespace App\Http\Controllers;

use App\personas;
use Illuminate\Http\Request;
use App;

class PersonasController extends Controller
{
    
    public function index()
    {
        $personas = App\personas::paginate(8);
        return view('lista', compact('personas'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('save');
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
        $datosPersona = new personas;
        //$datos = request()->except('_token');
        //personas::insert($datos);
        $datosPersona-> Nombres = $request-> Nombres;
        $datosPersona-> ApellidoPaterno = $request-> ApellidoPaterno;
        $datosPersona-> ApellidoMaterno = $request-> ApellidoMaterno;
        $datosPersona-> Rut = $request-> Rut;
        $datosPersona-> FechadeNacimiento = $request-> FechadeNacimiento;
        $datosPersona-> email = $request-> email;
        $datosPersona-> Contrasena = $request-> Contrasena;
        $datosPersona-> save();
        return back()->with('agregar', 'La nota se ha agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        $personaActualizar = App\personas::findOrFail($Id);
        return view('editar', compact('personaActualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id)
    {
        $datos = request()->except(['_token', '_method']);
        personas::where('Id','=',$Id)->update($datos);
        return back()->with('update', 'La nota se ha actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        personas::destroy($Id);  
        return back();
    }
}
