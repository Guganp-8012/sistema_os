<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\Empresa;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicos = Servico::with('empresa', 'categoria')->get();

        return view('servico.index', ['servicos' => $servicos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresas = Empresa::all();
        $categorias = Categoria::all();
        
        return view('servico.cadastrar', compact('empresas', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'empresa_id' => 'required|integer',
            'categoria_id' => 'required|integer',
        ]);

        Servico::create($request->all());

        return redirect()->route('servico.cadastrar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servico $servico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servico = Servico::find($id);
        return view('servico.editar', ['servico' => $servico]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $servico = Servico::find($id);
        $servico->update($request->all());

        return redirect()->route('servico.index')->with('success', 'Servico atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $servico = Servico::find($id);
        $servico->delete();
        return redirect()->route('servico.index')->with('success', 'Servico excluído com sucesso.');
    }
}