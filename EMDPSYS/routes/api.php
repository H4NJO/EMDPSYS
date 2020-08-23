        <?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Use App\TCategoria;

Route::get('t_categorias', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return TCategoria::all();
});

Route::get('t_categorias/{nIdCategoria}', function($id) {
    return TCategoria::find($id);
});

Route::post('t_categorias', function(Request $request) {
    return TCategoria::create($request->all);
});

Route::put('t_categorias/{nIdCategoria}', function(Request $request, $id) {
    $categoria = TCategoria::findOrFail($id);
    $categoria->update($request->all());

    return $categoria;
});

Route::delete('t_categorias/{nIdCategoria}', function($id) {
    TCategoria::find($id)->delete();

    return 204;
});

Use App\TSubcategoria;

Route::get('t_subcategorias', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return TSubcategoria::all();
});

Route::get('t_subcategorias/{nIdSubcategoria}', function($id) {
    return TSubcategoria::find($id);
});

Route::post('t_subcategorias', function(Request $request) {
    return TSubcategoria::create($request->all);
});

Route::put('t_subcategorias/{nIdSubcategoria}', function(Request $request, $id) {
    $subcategoria = TSubcategoria::findOrFail($id);
    $subcategoria->update($request->all());

    return $subcategoria;
});

Route::delete('t_subcategorias/{nIdSubcategoria}', function($id) {
    TSubcategoria::find($id)->delete();

    return 204;
});

Use App\TMarca;

Route::get('t_marcas', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return TMarca::all();
});

Route::get('t_marcas/{nIdMarca}', function($id) {
    return TMarca::find($id);
});

Route::post('t_marcas', function(Request $request) {
    return TMarca::create($request->all);
});

Route::put('t_marcas/{nIdMarca}', function(Request $request, $id) {
    $marca = TMarca::findOrFail($id);
    $marca->update($request->all());

    return $marca;
});

Route::delete('t_marcas/{nIdMarca}', function($id) {
    TMarca::find($id)->delete();

    return 204;
});

Use App\TUnidad;

Route::get('t_unidads', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return TUnidad::all();
});

Route::get('t_unidads/{nIdUnidad}', function($id) {
    return TUnidad::find($id);
});

Route::post('t_unidads', function(Request $request) {
    return TUnidad::create($request->all);
});

Route::put('t_unidads/{nIdUnidad}', function(Request $request, $id) {
    $unidad = TUnidad::findOrFail($id);
    $unidad->update($request->all());

    return $unidad;
});

Route::delete('t_unidads/{nIdUnidad}', function($id) {
    TUnidad::find($id)->delete();

    return 204;
});

Use App\MProducto;

Route::get('m_productos', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return MProducto::all();
});

Route::get('m_productos/{nIdProducto}', function($id) {
    return MProducto::find($id);
});

Route::post('m_productos', function(Request $request) {
    return MProducto::create($request->all);
});

Route::put('m_productos/{nIdProducto}', function(Request $request, $id) {
    $producto = MProducto::findOrFail($id);
    $producto->update($request->all());

    return $producto;
});

Route::delete('m_productos/{nIdProducto}', function($id) {
    MProducto::find($id)->delete();

    return 204;
});

Use App\DVenta;

Route::get('d_ventas', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return DVenta::all();
});

Route::get('d_ventas/{nIdDVenta}', function($id) {
    return DVenta::find($id);
});

Route::post('d_ventas', function(Request $request) {
    return DVenta::create($request->all);
});

Route::put('d_ventas/{nIdDVenta}', function(Request $request, $id) {
    $dventa = DVenta::findOrFail($id);
    $dventa->update($request->all());

    return $dventa;
});

Route::delete('d_ventas/{nIdDVenta}', function($id) {
    DVenta::find($id)->delete();

    return 204;
});

Use App\MVenta;

Route::get('m_ventas', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return MVenta::all();
});

Route::get('m_ventas/{nIdVenta}', function($id) {
    return MVenta::find($id);
});

Route::post('m_ventas', function(Request $request) {
    return MVenta::create($request->all);
});

Route::put('m_ventas/{nIdVenta}', function(Request $request, $id) {
    $mventa = MVenta::findOrFail($id);
    $mventa->update($request->all());

    return $mventa;
});

Route::delete('m_ventas/{nIdVenta}', function($id) {
    MVenta::find($id)->delete();

    return 204;
});

Use App\MIngreso;

Route::get('m_ingresos', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return MIngreso::all();
});

Route::get('m_ingresos/{nIdIngreso}', function($id) {
    return MIngreso::find($id);
});

Route::post('m_ingresos', function(Request $request) {
    return MIngreso::create($request->all);
});

Route::put('m_ingresos/{nIdIngreso}', function(Request $request, $id) {
    $mingreso = MIngreso::findOrFail($id);
    $mingreso->update($request->all());

    return $mingreso;
});

Route::delete('m_ingresos/{nIdIngreso}', function($id) {
    MIngreso::find($id)->delete();

    return 204;
});

Use App\DIngreso;

Route::get('d_ingresos', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return DIngreso::all();
});

Route::get('d_ingresos/{nIdIngreso}', function($id) {
    return DIngreso::find($id);
});

Route::post('d_ingresos', function(Request $request) {
    return DIngreso::create($request->all);
});

Route::put('d_ingresos/{nIdIngreso}', function(Request $request, $id) {
    $mingreso = DIngreso::findOrFail($id);
    $mingreso->update($request->all());

    return $mingreso;
});

Route::delete('d_ingresos/{nIdIngreso}', function($id) {
    DIngreso::find($id)->delete();

    return 204;
});

Use App\MEmpleado;

Route::get('m_empleados', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return MEmpleado::all();
});

Route::get('m_empleados/{nIdEmpleado}', function($id) {
    return MEmpleado::find($id);
});

Route::post('m_empleados', function(Request $request) {
    return MEmpleado::create($request->all);
});

Route::put('m_empleados/{nIdEmpleado}', function(Request $request, $id) {
    $empleado = MEmpleado::findOrFail($id);
    $empleado->update($request->all());

    return $empleado;
});

Route::delete('m_empleados/{nIdEmpleado}', function($id) {
    MEmpleado::find($id)->delete();

    return 204;
});

Use App\MCliente;

Route::get('m_cliente', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return MCliente::all();
});

Route::get('m_cliente/{nIdCliente}', function($id) {
    return MCliente::find($id);
});

Route::post('m_cliente', function(Request $request) {
    return MCliente::create($request->all);
});

Route::put('m_cliente/{nIdCliente}', function(Request $request, $id) {
    $cliente = MCliente::findOrFail($id);
    $cliente->update($request->all());

    return $cliente;
});

Route::delete('m_cliente/{nIdCliente}', function($id) {
    MCliente::find($id)->delete();

    return 204;
});

Use App\MProveedor;

Route::get('m_proveedors', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return MProveedor::all();
});

Route::get('m_proveedors/{nIdProveedor}', function($id) {
    return MProveedor::find($id);
});

Route::post('m_proveedors', function(Request $request) {
    return MProveedor::create($request->all);
});

Route::put('m_proveedors/{nIdProveedor}', function(Request $request, $id) {
    $proveedor = MProveedor::findOrFail($id);
    $proveedor->update($request->all());

    return $proveedor;
});

Route::delete('m_proveedors/{nIdProveedor}', function($id) {
    MProveedor::find($id)->delete();

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
/////
Route::get('subcategorias', 'SubcategoriaController@index');
Route::get('subcategorias/{subcategoria}', 'SubcategoriaController@show');
Route::post('subcategorias', 'SubcategoriaController@store');
Route::put('subcategorias/{subcategoria}', 'SubcategoriaController@update');
Route::delete('subcategorias/{subcategoria}', 'SubcategoriaController@delete');
/////
Route::get('marcas', 'MarcaController@index');
Route::get('marcas/{marca}', 'MarcaController@show');
Route::post('marcas', 'MarcaController@store');
Route::put('marcas/{marca}', 'MarcaController@update');
Route::delete('marcas/{marca}', 'MarcaController@delete');
/////
Route::get('unidads', 'UnidadController@index');
Route::get('unidads/{unidad}', 'UnidadController@show');
Route::post('unidads', 'UnidadController@store');
Route::put('unidads/{unidad}', 'UnidadController@update');
Route::delete('unidads/{unidad}', 'UnidadController@delete');
/////
Route::get('productos', 'ProductoController@index');
Route::get('productos/{producto}', 'ProductoController@show');
Route::post('productos', 'ProductoController@store');
Route::put('productos/{producto}', 'ProductoController@update');
Route::delete('productos/{producto}', 'ProductoController@delete');
/////
Route::get('dventas', 'DVentaController@index');
Route::get('dventas/{dventa}', 'DVentaController@show');
Route::post('dventas', 'DVentaController@store');
Route::put('dventas/{dventa}', 'DVentaController@update');
Route::delete('dventas/{dventa}', 'DVentaController@delete');
/////
Route::get('mventas', 'MVentaController@index');
Route::get('mventas/{dventa}', 'MVentaController@show');
Route::post('mventas', 'MVentaController@store');
Route::put('mventas/{mventa}', 'MVentaController@update');
Route::delete('mventas/{mventa}', 'MVentaController@delete');
/////
Route::get('mingresos', 'mIngresosController@index');
Route::get('mingresos/{mingreso}', 'mIngresosController@show');
Route::post('mingresos', 'mIngresosController@store');
Route::put('mingresos/{mingreso}', 'mIngresosController@update');
Route::delete('mingresos/{mingreso}', 'mIngresosController@delete');
/////
Route::get('dingresos', 'dIngresosController@index');
Route::get('dingresos/{dingreso}', 'dIngresosController@show');
Route::post('dingresos', 'dIngresosController@store');
Route::put('dingresos/{dingreso}', 'dIngresosController@update');
Route::delete('dingresos/{dingreso}', 'dIngresosController@delete');
/////
Route::get('empleados', 'EmpleadoController@index');
Route::get('empleados/{empleado}', 'EmpleadoController@show');
Route::post('empleados', 'EmpleadoController@store');
Route::put('empleados/{empleado}', 'EmpleadoController@update');
Route::delete('empleados/{empleado}', 'EmpleadoController@delete');
/////
Route::get('clientes', 'ClientesController@index');
Route::get('clientes/{cliente}', 'ClientesController@show');
Route::post('clientes', 'ClientesController@store');
Route::put('clientes/{cliente}', 'ClientesController@update');
Route::delete('clientes/{cliente}', 'ClientesController@delete');
/////
Route::get('proveedores', 'Proveedorontroller@index');
Route::get('proveedores/{proveedor}', 'Proveedorontroller@show');
Route::post('proveedores', 'Proveedorontroller@store');
Route::put('proveedores/{proveedor}', 'Proveedorontroller@update');
Route::delete('proveedores/{proveedor}', 'Proveedorontroller@delete');