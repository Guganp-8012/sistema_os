<?php
  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/token', function () {
    return csrf_token(); 
});


Route::get('/produtos', [ProdutoController::class, 'index']);
Route::post('/produtos', [ProdutoController::class, 'store']);
  