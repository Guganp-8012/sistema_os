<?php

namespace App\Http\Controllers;
    
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Servico::all();

        return view('empresa.index', ['empresas' => $empresas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresa.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'valor' => 'required',
        ]);

        Servico::create($request->all());

        return redirect()->route('empresa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servico $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empresa = Servico::find($id);
        return view('empresa.editar', ['empresa' => $empresa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $empresa = Servico::find($id);
        $empresa->update($request->all());

        return redirect()->route('empresa.index')->with('success', 'Servico atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empresa = Servico::find($id);
        $empresa->delete();
        return redirect()->route('empresa.index')->with('success', 'Servico excluído com sucesso.');
    }
}