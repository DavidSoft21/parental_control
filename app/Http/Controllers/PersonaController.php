<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Ciudad;
use App\Http\Requests\PersonaCreateRequest;
use App\Http\Requests\PersonaActualizarRequest;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $genero = ['F' => 'FEMENINO', 'M' => 'MASCULINO'];

    public function index()
    {
        $personas = Persona::all();   
        //dd($personas);
        return view('Persona.index',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudades = Ciudad::all();
        $personas = Persona::all();
        $generos = $this->genero;
        $madres = Persona::where('sexo','=','F')->get();
        $padres = Persona::where('sexo','=','M')->get();

        return view('Persona.create',compact(
            'personas',
            'ciudades',
            'generos',
            'madres',
            'padres')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonaCreateRequest $request)
    {
        $request->crearPersona();
        return redirect('/personas')->with('success', MESSAGE_SAVE_SUCCESS);
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
        $persona = Persona::find($id);
        $ciudades = Ciudad::all();
        $personas = Persona::all();
        $generos = $this->genero;
        $madres = Persona::where('sexo','=','F')->get();
        $padres = Persona::where('sexo','=','M')->get();

        return view('Persona.edit',compact(
            'personas',
            'ciudades',
            'generos',
            'madres',
            'padres',
            'persona')
        );
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