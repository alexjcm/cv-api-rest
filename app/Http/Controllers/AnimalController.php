<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Cliente;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $animal = new Animal();

        $animal->nombre = $request->nombre;
        $animal->raza = $request->raza;
        $animal->sexo = $request->sexo;

        $cliente = new Cliente();
        $animal->cliente_id = $request->cliente_id; //Clave foranea

        //Campos opcionales
        if (($request->color) != null) {
            $animal->color = $request->color;
        }
        if (($request->especie) != null) {
            $animal->especie = $request->especie;
        }
        if (($request->fecha_nacimiento) != null) {
            $animal->fecha_nacimiento = $request->fecha_nacimiento;
        }
        if (($request->edad) != null) {
            $animal->edad = $request->edad;
        }

        $animal->save();
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
