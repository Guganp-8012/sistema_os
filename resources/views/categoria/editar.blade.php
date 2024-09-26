@extends('layouts.base')

@section('title', 'Editar Categoria')

@section('content')
    <h2>Editar Categoria</h2>

    <form action="{{ route('categoria.atualizar', $categoria->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="tipo">Tipo: </label>
        <input type="text" name="tipo" id="tipo" value="{{ $categoria->tipo }}" required>
        
        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('categoria.index') }}">
        <button>Voltar</button>
    </a>
@endsection