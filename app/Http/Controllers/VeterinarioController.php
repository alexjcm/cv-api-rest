<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veterinario;

class VeterinarioController extends Controller
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
        if ($request->isJson()) {
            $data = $request->json()->all();
            try {
                $veterinario = new Veterinario();

                //Declaramos el nombre con el nombre enviado en el request desde Postman
                $veterinario->nombre = $data['nombre'];
                $veterinario->apellido = $data['apellido'];
                $veterinario->correo = $data['correo'];
                $veterinario->clave = $data['clave'];
                $veterinario->cedula = $data['cedula'];
                $veterinario->telefono = $data['telefono'];
                $veterinario->estado = $data['estado']; 
                $veterinario->nivel_acceso = $data['nivel_acceso'];;
           
                if (!isset($data['direccion'])) 
                    $veterinario->direccion = "Loja";   
                else
                    $veterinario->direccion = $data['direccion']; 
             
                //$usuario->external_id = Utilidades\UUID::v4();

                //Guardamos el cambio en nuestro modelo
                $veterinario->save();        
               
                return response()->json(["mensaje" => "Operacion existosa al registrar el Usuario", "siglas" => "OE"], 200)->header('Access-Control-Allow-Origin', '*');
            
            } catch (\Exception $exc) {                
                return response()->json(["mensaje" => "try catch.  Faltan datos y " . $exc, "siglas" => "FD"], 400);
            }
        } else {
            return response()->json(["mensaje" => "La data no tiene el formato deseado", "siglas" => "DNF"], 400);
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
        return Veterinario::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        
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
        $userObjeto = Veterinario::where('id',$id)->first(); //obtnemos el objeto(en un arreglo asociado)
        
        if ($userObjeto) {
            if ($request->isJson()) {
                
                $data = $request->json()->all();//lo convierte al arreglo a formato json
                $veterinario = Veterinario::find($userObjeto->id);
                
                if (isset($data['nombre']))                    
                    $veterinario->nombre = $data['nombre'];

                if (isset($data['apellido']))                    
                    $veterinario->apellido = $data['apellido'];
                
                if (isset($data['clave']))  
                    $veterinario->clave=$data['clave'];
            
                if (isset($data['correo']))  
                    $veterinario->correo=$data['correo'];

                if (isset($data['telefono']))  
                    $veterinario->telefono=$data['telefono'];

                if (isset($data['direccion']))  
                    $veterinario->direccion=$data['direccion'];
                
                $veterinario->save();
                
                return response()->json(["mensaje" => "Operacion existosa","siglas"=>"OE"], 200);
                //todo esto es un ednpoint y se lo registra en el router
                //es un post
            }
            else{
                return response()->json(["mensaje" => "La data no tiene el formato deseado","siglas"=>"DNF"], 400);
            }
        } 
        else{
             return response()->json(["mensaje" => "No se encontraron datos en Usuario","siglas"=>"NDE"], 203);
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
        //
    }
}
