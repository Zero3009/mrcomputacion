<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Yajra\Datatables\Datatables;
use DB;

class DatatablesController extends Controller
{

	public function Get(){
		$retornar = DB::table('provs')->selectRaw("provs.tel as tel, provs.nombre as nombre");
		$datatables = app('datatables')->of($retornar);
		return $datatables->make(true); 
	}
}
