<?php
  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController; #ok
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController; #ok
use App\Http\Controllers\EmpresaController; #ok
use App\Http\Controllers\OrdemServicoController;
use App\Http\Controllers\ProdutoController; #ok
use App\Http\Controllers\ServicoController; #ok


Route::get('/', function () {
    return view('welcome');
});

Route::get('/token', function () {
    return csrf_token(); 
});


Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/cadastrar', [CategoriaController::class, 'create'])->name('categoria.cadastrar');
Route::get('/categoria/editar/{id}', [CategoriaController::class, 'edit'])->name('categoria.editar');
Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.salvar');
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.deletar');
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.atualizar');
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');


Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/cadastrar', [ClienteController::class, 'create'])->name('cliente.cadastrar');
Route::get('/cliente/editar/{id}', [ClienteController::class, 'edit'])->name('cliente.editar');
Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.salvar');
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->name('cliente.deletar');
Route::put('/cliente/{id}', [ClienteController::class, 'update'])->name('cliente.atualizar');
Route::get('/cliente/{id}', [ClienteController::class, 'show'])->name('cliente.show');


Route::get('/contato', [ContatoController::class, 'index'])->name('contato.index');
Route::get('/contato/cadastrar', [ContatoController::class, 'create'])->name('contato.cadastrar');
Route::get('/contato/editar/{id}', [ContatoController::class, 'edit'])->name('contato.editar');
Route::post('/contato', [ContatoController::class, 'store'])->name('contato.salvar');
Route::delete('/contato/{id}', [ContatoController::class, 'destroy'])->name('contato.deletar');
Route::put('/contato/{id}', [ContatoController::class, 'update'])->name('contato.atualizar');
Route::get('/contato/{id}', [ContatoController::class, 'show'])->name('contato.show');


Route::get('/empresa', [EmpresaController::class, 'index'])->name('empresa.index');
Route::get('/empresa/cadastrar', [EmpresaController::class, 'create'])->name('empresa.cadastrar');
Route::get('/empresa/editar/{id}', [EmpresaController::class, 'edit'])->name('empresa.editar');
Route::post('/empresa', [EmpresaController::class, 'store'])->name('empresa.salvar');
Route::delete('/empresa/{id}', [EmpresaController::class, 'destroy'])->name('empresa.deletar');
Route::put('/empresa/{id}', [EmpresaController::class, 'update'])->name('empresa.atualizar');
Route::get('/empresa/{id}', [EmpresaController::class, 'show'])->name('empresa.show');


Route::get('/ordem-servico', [OrdemServicoController::class, 'index'])->name('ordem-servico.index');
Route::get('/ordem-servico/cadastrar', [OrdemServicoController::class, 'create'])->name('ordem-servico.cadastrar');
Route::get('/ordem-servico/editar/{id}', [OrdemServicoController::class, 'edit'])->name('ordem-servico.editar');
Route::post('/ordem-servico', [OrdemServicoController::class, 'store'])->name('ordem-servico.salvar');
Route::delete('/ordem-servico/{id}', [OrdemServicoController::class, 'destroy'])->name('ordem-servico.deletar');
Route::put('/ordem-servico/{id}', [OrdemServicoController::class, 'update'])->name('ordem-servico.atualizar');
Route::get('/ordem-servico/{id}', [OrdemServicoController::class, 'show'])->name('ordem-servico.show');


Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/cadastrar', [ProdutoController::class, 'create'])->name('produto.cadastrar');
Route::get('/produto/editar/{id}', [ProdutoController::class, 'edit'])->name('produto.editar');
Route::post('/produto', [ProdutoController::class, 'store'])->name('produto.salvar');
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.deletar');
Route::put('/produto/{id}', [ProdutoController::class, 'update'])->name('produto.atualizar');
Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');


Route::get('/servico', [ServicoController::class, 'index'])->name('servico.index');
Route::get('/servico/cadastrar', [ServicoController::class, 'create'])->name('servico.cadastrar');
Route::get('/servico/editar/{id}', [ServicoController::class, 'edit'])->name('servico.editar');
Route::post('/servico', [ServicoController::class, 'store'])->name('servico.salvar');
Route::delete('/servico/{id}', [ServicoController::class, 'destroy'])->name('servico.deletar');
Route::put('/servico/{id}', [ServicoController::class, 'update'])->name('servico.atualizar');
Route::get('/servico/{id}', [ServicoController::class, 'show'])->name('servico.show');