<?php





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard','DashboardController@index')->name ('dashboard.index');

Route::resource('estudiantes','EstudianteController');

//Route::get('loque aparece en la url','nombre del controlador a llamar@funcion invocada dentro del controlador')->name ('para ponerlo en elhref del html');
Route::get('/tareas/buscar','TareasController@buscar')->name ('tareas.buscar');

//hay que poner en la url http://myproject.test/admin/dashboard
Route::group(['prefix' => 'admin', 'middleware' => 'is_admin', 'as' => 'admin.'], function() {
    
});
