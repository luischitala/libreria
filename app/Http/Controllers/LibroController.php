<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        return response()->json($libros);
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
        $libro = new Libro();

        $libro->nombre = $request->nombre;
        $libro->autor = $request->autor;
        $libro->año = $request->año;
        $libro->editorial = $request->año;
        $libro->ciudad = $request->ciudad;

        if ( $libro->save() ){
            return response()->json(["status" => "ok"]);
        }else{
            return response()->json(["status" => "error"]);
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
        $libro = Libro::get($id);

        
        $libro->nombre = $request->nombre;
        $libro->autor = $request->autor;
        $libro->año = $request->año;
        $libro->editorial = $request->año;
        $libro->ciudad = $request->ciudad;

        

        if ( $libro->save() ){
            return response()->json(["status" => "ok"]);
        }else{
            return response()->json(["status" => "error"]);
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
