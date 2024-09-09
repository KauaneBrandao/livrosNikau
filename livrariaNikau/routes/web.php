<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

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

// importação do controller events
use App\http\Controllers\livrosController;
use App\Models\Cadastro;

Route::get('/', [CadastroController::class,'insert']);

// rota  para a pagina galeria
Route::get('/contato', function () {
    return view('contato');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});


