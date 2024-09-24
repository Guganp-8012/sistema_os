@extends('layouts.app')

@section('title', 'Cadastrar Produto')

@section('content')
    <h1>Cadastrar Produto</h1>

    <form action="{{ route('produto.salvar') }}" method="post">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="valor">Valor:</label>
        <input type="text" name="valor" id="valor" required>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" required>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('produto.index') }}">
        <button type="button">Voltar</button>
    </a>
@endsection