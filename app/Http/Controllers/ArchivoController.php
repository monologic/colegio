<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Archivo;
use App\Archivotipo;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('biblioteca.ver');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ats = Archivotipo::all();
        return view('biblioteca.crear')->with('archivoTipos', $ats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('archivo'))
        {
            $file = $request -> file('archivo');
            $name = 'noticia_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/archivos/";
            $file -> move($path,$name);
        }
        $archivo = new Archivo($request->all());

        $archivo->archivo = $name;
        $archivo->save();
        return redirect('app/archivos');
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
        $archivo = Archivo::find($id);
        $archivo->fill($request->all());

        if($request->file('archivo'))
        {
            $file = $request -> file('archivo');
            $name = 'archivo_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/archivos/";
            $file -> move($path,$name);
            $archivo->archivo = $name;
        }
        $archivo->save();
        return redirect('app/archivos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Archivo::destroy($id);

        $this->get();
    }

    public function get()
    {
        
        $archivos = Archivo::all();
        return response()->json( $archivos );

    }
    public function getArchivoTipos()
    {
        $ats = Archivotipo::all();

        return response()->json( $ats );
    }
}
