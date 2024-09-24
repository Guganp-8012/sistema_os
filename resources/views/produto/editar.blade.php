@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')
    <h1>Editar Produto</h1>

    <form action="{{ route('produto.atualizar', $produto->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $produto->nome }}" required>

        <label for="valor">Valor:</label>
        <input type="text" name="valor" id="valor" value="{{ $produto->valor }}" required>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" value="{{ $produto->descricao }}" required>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('produto.index') }}">
        <button type="button">Voltar</button>
    </a>
@endsection