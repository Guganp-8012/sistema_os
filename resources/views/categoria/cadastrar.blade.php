@extends('layouts.base')

@section('title', 'Cadastrar Categoria')

@section('content')
    <h2>Cadastrar Categoria</h2>

    <form action="{{ route('categoria.salvar') }}" method="post">
        @csrf
        <label for="tipo">Tipo: </label>
        <input type="text" name="tipo" id="tipo" required>

        <button type="submit">Salvar</button>
    </form>
    
    <a href="{{ route('categoria.index') }}">
        <button>Voltar</button>
    </a>
@endsection