<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Use App\TCategoria;

Route::get('categorias', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return TCategoria::all();
});

Route::get('categorias/{nIdCategoria}', function($id) {
    return TCategoria::find($id);
});

Route::post('categorias', function(Request $request) {
    return TCategoria::create($request->all);
});

Route::put('categorias/{nIdCategoria}', function(Request $request, $id) {
    $categoria = TCategoria::findOrFail($id);
    $categoria->update($request->all());

    return $categoria;
});

Route::delete('categorias/{nIdCategoria}', function($id) {
    TCategoria::find($id)->delete();

    return 204;
});

Use App\Producto;

Route::get('productos', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Producto::all();
});

Route::get('productos/{id}', function($id) {
    return Producto::find($id);
});

Route::post('productos', function(Request $request) {
    return Producto::create($request->all);
});

Route::put('productos/{id}', function(Request $request, $id) {
    $producto = Producto::findOrFail($id);
    $producto->update($request->all());

    return $producto;
});

Route::delete('productos/{id}', function($id) {
    Producto::find($id)->delete();

    return 204;
});

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('categorias', 'CategoriaController@index');
Route::get('categorias/{categoria}', 'CategoriaController@show');
Route::post('categorias', 'CategoriaController@store');
Route::put('categorias/{categoria}', 'CategoriaController@update');
Route::delete('categorias/{categoria}', 'CategoriaController@delete');
