<?php

namespace App\Http\Controllers;
    
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();

        return view('cliente.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'foto' => 'nullable|file|mimes:jpg,png,jpeg|max:2048',
            'status' => 'required|boolean',
        ]);

        $foto_camimho = $request->file('foto')->store('fotos', 'public');

        // Criar o cliente com o caminho da foto
        $cliente = Cliente::create([
            'nome' => $request->nome,
            'data_nascimento' => $request->data_nascimento,
            'foto' => $foto_camimho,
            'status' => $request->status,
        ]);

        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.editar', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        $foto_camimho = $request->file('foto')->store('fotos', 'public');

        $cliente->update([
            'nome' => $request->nome,
            'data_nascimento' => $request->data_nascimento,
            'foto' => $foto_camimho,
            'status' => $request->status,
        ]);

        return redirect()->route('cliente.index')->with('success', 'Cliente atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('cliente.index')->with('success', 'Cliente excluído com sucesso.');
    }
    
    public function atualizarStatus(Request $request, $id){
        $cliente = Cliente::find($id);
        $cliente->status = true;
        $cliente->save();

        return redirect()->route('cliente.index');
    }
}