<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/admin/stock');
});
Route::get('/admin/stock', 'StockController@IndexStock');
Route::get('/admin/addprovs', 'ProveedoresController@Index');
Route::get('/datatables/get', ['uses' => 'DatatablesController@Get']);
Route::post('/admin/provs/nuevo/post', 'ProveedoresController@addProveedor');
