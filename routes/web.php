<?php
  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/token', function () {
    return csrf_token(); 
});


Route::get('/contato', [ContatoController::class, 'index'])->name('contato.index');
Route::get('/contato/cadastrar', [ContatoController::class, 'create'])->name('contato.create');
Route::post('/contato', [ContatoController::class, 'store'])->name('contato.salvar');
Route::delete('/contato/{id}', [ContatoController::class, 'destroy'])->name('contato.deletar');
Route::put('/contato/{id}', [ContatoController::class, 'update'])->name('contato.update');
Route::get('/contato/{id}', [ContatoController::class, 'show'])->name('contato.show');