@extends('layouts.app')

@section('title', 'Cadastrar Cliente')

@section('content')
    <h2>Cadastrar Cliente</h2>

    <form action="{{ route('cliente.salvar') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" required>

        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" accept="image/*">

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
        </select>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('cliente.index') }}">
        <button>Voltar</button>
    </a>
@endsection