<?php

namespace App\Http\Controllers;
    
use App\Models\OrdemServico;
use Illuminate\Http\Request;

class OrdemServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordemServicos = OrdemServico::all();

        return view('ordemServico.index', ['ordemServicos' => $ordemServicos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ordemServico.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'data_inicio' => 'required',
            'data_final' => 'required',
            'status' => 'required',
        ]);

        OrdemServico::create($request->all());

        return redirect()->route('ordemServico.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrdemServico $ordemServico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ordemServico = OrdemServico::find($id);
        return view('ordemServico.editar', ['ordemServico' => $ordemServico]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ordemServico = OrdemServico::find($id);
        $ordemServico->update($request->all());

        return redirect()->route('ordemServico.index')->with('success', 'Ordem de servico atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ordemServico = OrdemServico::find($id);
        $ordemServico->delete();
        return redirect()->route('ordemServico.index')->with('success', 'Ordem de servico excluído com sucesso.');
    }
}