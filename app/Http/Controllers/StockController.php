<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    /*public function Index(){
    	return view('addstock');
    }*/
    public function IndexStock(){
    	return view('administracion');
    }
}
