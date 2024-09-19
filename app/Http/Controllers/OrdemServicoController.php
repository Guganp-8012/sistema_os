<?php

namespace App\Http\Controllers;
    
use App\Models\OrdemServico;
use App\Models\Servico;
use App\Models\Empresa;
use App\Models\Cliente;
use Illuminate\Http\Request;

class OrdemServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordemServicos = OrdemServico::with('servico', 'empresa', 'cliente')->get();

        return view('ordem-servico.index', ['ordemServicos' => $ordemServicos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicos = Servico::all();
        $empresas = Empresa::all();
        $clientes = Cliente::all();
        
        return view('ordem-servico.cadastrar', compact('servicos', 'empresas', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|integer',
            'empresa_id' => 'required|integer',
            'servico_id' => 'required|integer',
            'data_inicio' => 'required|date',
            'data_final' => 'required|date',
            'status' => 'required|boolean',
        ]);

        OrdemServico::create($request->all());

        return redirect()->route('ordem-servico.index');
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
        return view('ordem-servico.editar', ['ordemServico' => $ordemServico]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ordemServico = OrdemServico::find($id);
        $ordemServico->update($request->all());

        return redirect()->route('ordem-servico.index')->with('success', 'Ordem de servico atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ordemServico = OrdemServico::find($id);
        $ordemServico->delete();
        return redirect()->route('ordem-servico.index')->with('success', 'Ordem de servico excluído com sucesso.');
    }
 
    public function atualizarStatus(Request $request, $id){
        $ordemServico = OrdemServico::find($id);
        $ordemServico->status = false;
        $ordemServico->save();

        return redirect()->route('ordem-servico.index');
    }
}