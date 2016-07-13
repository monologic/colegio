<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
	public function vistaEstudiantes()
	{
		return view('estudiantes.ver');
	}
	public function getEstudiantes()
	{
		$users = User::where('usuariotipo_id', 1)->get();
		return response()->json( $users );
	}
	public function vistaCrearEstudiante()
	{
		return view('estudiantes.crear');
	}
	
}