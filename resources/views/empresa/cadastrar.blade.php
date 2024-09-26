@extends('layouts.base')

@section('title', 'Cadastrar Empresa')

@section('content')
    <h1>Cadastrar Empresa</h1>

    <form action="{{ route('empresa.salvar') }}" method="post">
        @csrf
        
        <label for="razao_social">Razão Social:</label>
        <input type="text" name="razao_social" id="razao_social" required>
        
        <label for="cnpj">CNPJ:</label>
        <input type="text" name="cnpj" id="cnpj" required>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" required>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required>

        <button type="submit">Salvar</button>
    </form>
    
    <a href="{{ route('empresa.index') }}">
        <button type="button">Voltar</button>
    </a>
@endsection