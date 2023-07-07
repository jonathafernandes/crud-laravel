<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/jogos','jogos'); //Rota para retornar uma `view`

// Route::get('/jogos', function(){
//     return "Testando de novo";
// }); //Rota para retotnar um texto

// Route::view('/jogos', 'jogos', ['name' => 'GTA']); //Rota para retornar um parâmetro estático

// Route::get('/jogos/{id?}/{name?}',function($id = null, $name = null){
//     return view('jogos',['idJogo'=>$id, 'nomeJogo'=>$name]);
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);// Retornar parâmetros dinâmico

Route::get('/jogos', [JogosController::class, 'index']);

Route::get('/home', function(){
    return view('welcome');
})->name('home-index');

Route::fallback(function(){
    return "Erro ao localizar a rota!";
});