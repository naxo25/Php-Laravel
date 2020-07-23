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

        $campos=[
            'Nombres' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'email' => 'required|email',
            'FechadeNacimiento' => 'required|date',
            'Rut' => 'required|string|max:100',
            'Contrasena' => 'required|string',
            //'Foto' => 'required|max:10000|mimes:jpeg,png,jpg',
        ];
        $mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$mensaje);

        $datos = request()->except('_token');
                
        if ($request->hasFile('Foto')) {
            $datos['Foto']=$request->file('Foto')->store('imagenes','public');
        }


        personas::insert($datos);
        return redirect()->route('index')->with('etiqueta', 'El usuario ha sido agregado');
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
        $campos=[
            'Nombres' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'email' => 'required|email',
            'FechadeNacimiento' => 'required|date',
            'Rut' => 'required|string|max:100',
            'Contrasena' => 'required|string',
            //'Foto' => 'required|max:10000|mimes:jpeg,png,jpg',
        ];
        $mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$mensaje);
        
        $datos = request()->except(['_token', '_method']);
        
        if ($request->hasFile('Foto')) {
            $datos['Foto']=$request->file('Foto')->store('imagenes','public');
        }

        personas::where('Id','=',$Id)->update($datos);
        return redirect()->route('index')->with('etiqueta', 'El usuario ha sido editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        personas::where('Id','=',$Id)->delete($Id); 
        return redirect()->route('index')->with('etiqueta', 'El usuario ha sido Eliminado');
    }
}
