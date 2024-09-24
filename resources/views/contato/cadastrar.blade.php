@extends('layouts.app')

@section('title', 'Cadastrar Contato')

@section('content')
    <h2>Cadastrar Contato</h2>

    <form action="{{ route('contato.salvar') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required>

        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" accept="image/*">

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
        </select>

        <button type="submit">Salvar</button>
    </form>
    
    <a href="{{ route('contato.index') }}">
        <button type="button">Voltar</button>
    </a>
@endsection