<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarrosController;
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

Route::get('/user', [UserController::class, 'index'])->where(['name' => '[a-z]+']);

Route::get('/example/{name?}', function ($name = "Fabian") {
    return view('example',[ 'name' => $name]);
})->where(['nombre' => '[a-z]+', 'lastname' => '[a-z]+']);

Route::get('/saludo/{nombre}/{lastname?}', function ($nombre, $lastname=null) {
    return 'Hola ' . $nombre . ' ' . $lastname;
})->where(['nombre' => '[a-z]+', 'lastname' => '[a-z]+']);

Route::get('/suma/{num1}/{num2}', function ($num1, $num2) {
    return 'Resultado de la suma es: ' . $num1 + $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/resta/{num1}/{num2}', function ($num1, $num2) {
    return 'Resultado de la resta es: ' . $num1 - $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/multiplicacion/{num1}/{num2}', function ($num1, $num2) {
    return 'Resultado de la multiplicacion es: ' . $num1 * $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/division/{num1}/{num2}', function ($num1, $num2) {
    return 'Resultado de la division es: ' . $num1 / $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/carruns', [CarrosController::class, 'getCarros']);
