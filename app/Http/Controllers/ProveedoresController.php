<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Provs;
use DB;
use Validator;

class ProveedoresController extends Controller
{
    public function Index(){
    	return view('addprovs');
    }
    public function addProveedor(Request $request){
    	DB::beginTransaction();
    	try 
        {
            $validator = Validator::make($request->all(), [
                'nombre' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput();
            }
            $query = new Provs;
                $query->nombre = $request->nombre;
                $query->tel = $request->tel;
            $query->save();
            DB::commit();
            return redirect('/admin/stock');
        }
        catch(Exception $e)
        {
        	DB::rollback();
        	return redirect()
                ->back()
                ->withErrors('Se ha producido un errro: ( ' . $e->getCode() . ' ): ' . $e->getMessage().' - Copie este texto y envielo a informática');
        }
    }
}
