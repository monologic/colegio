<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
	public function getEstudiantes()
	{
		$users = User::where('usuariotipo_id', 1)->get();
		
		return view('estudiantes.ver')->with('users', $users);
	}
}