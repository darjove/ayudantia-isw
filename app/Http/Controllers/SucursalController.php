<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sucursal;
class SucursalController extends Controller
{
 
	public function index(){

		$sucursales = Sucursal::all();


		return view('sucursales.index')->with('sucursales', $sucursales);

	}



}
