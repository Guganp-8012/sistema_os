@extends('layouts.app')

@section('title', 'Editar Empresa')

@section('content')
    <h1>Editar Empresa</h1>

    <form action="{{ route('empresa.atualizar', $empresa->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="razao_social">Razão Social:</label>
        <input type="text" name="razao_social" id="razao_social" value="{{ $empresa->razao_social }}" required>

        <label for="cnpj">CNPJ:</label>
        <input type="text" name="cnpj" id="cnpj" value="{{ $empresa->cnpj }}" required>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" value="{{ $empresa->endereco }}" required>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="{{ $empresa->telefone }}" required>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('empresa.index') }}">
        <button>Voltar</button>
    </a>
@endsection