<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class PadreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('padres.ver');
    }

    /**
     * Listado de padres
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $users = User::where('usuariotipo_id', 5)->get();
        return response()->json( $users );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('padres.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $padre = new User($request->all());
        $padre->usuariotipo_id = 5;
        $padre->usuario = $request->dni;
        $padre->password = bcrypt($request->dni);

        $padre->save();
        return redirect('app/padres');
        
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
        $padre = User::find($id);
        $padre->fill($request->all());
        $padre->save();

        return $this->get();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return $this->get();
    }

    public function vistaAsignarHijos()
    {
        return view('padres.asignarHijos');
    }

    public function getPadre($dni)
    {
        $padre = User::where('dni', $dni)->get();

        return response()->json( $padre );
    }
}
