<?php

namespace App\Http\Controllers;
    
use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contatos = Contato::all();

        return view('contato.index', ['contatos' => $contatos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contato.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'telefone' => 'required',
            'foto' => 'nullable|file|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|boolean',
        ]);

        $foto_camimho = $request->file('foto')->store('fotos', 'public');

        // Criar o contato com o caminho da foto
        $contato = Contato::create([
            'email' => $request->email,
            'telefone' => $request->telefone,
            'foto' => $foto_camimho,
            'status' => $request->status,
        ]);

        return redirect()->route('contato.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contato = Contato::find($id);
        return view('contato.editar', ['contato' => $contato]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contato = Contato::find($id);

        $foto_camimho = $request->file('foto')->store('fotos', 'public');

        $contato->update([
            'email' => $request->email,
            'telefone' => $request->telefone,
            'foto' => $foto_camimho,
            'status' => $request->status,
        ]);

        return redirect()->route('contato.index')->with('success', 'Contato atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contato = Contato::find($id);
        $contato->delete();
        return redirect()->route('contato.index')->with('success', 'Contato excluído com sucesso.');
    }
    
    public function atualizarStatus(Request $request, $id){
        $contato = Contato::find($id);
        $contato->status = true;
        $contato->save();

        return redirect()->route('contato.index');
    }
}