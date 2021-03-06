<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//quiero usar el controlador asi qe lo importo, se importa con namespace/nombreclase
use App\Http\Controllers\ConsolasController;
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
// la ruta pyuede ser post o get (post para enviar cosas a la bd y get para obtener)
Route::get("marcas/get", [ConsolasController::class, "getMarcas"]);
//Route::get("url",[controlador::class,"metodo"])
