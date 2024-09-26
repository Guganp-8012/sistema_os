@extends('layouts.base')

@section('title', 'Editar Cliente')

@section('content')
    <h1>Editar Cliente</h1>

    <form action="{{ route('cliente.atualizar', $cliente->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $cliente->nome }}" required>
        
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" value="{{ $cliente->data_nascimento }}" required>

        <label>Foto:</label>
        <input type="file" name="foto" id="foto">
        @if($cliente->foto)
            <img src="{{ asset('storage/' . $cliente->foto) }}" alt="Foto do Cliente" width="100" height="100">
        @endif

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="1" @if ($cliente->status == 1) selected @endif>Ativo</option>
            <option value="0" @if ($cliente->status == 0) selected @endif>Inativo</option>
        </select>

        <button type="submit">Salvar</button>
        
        <a href="{{ route('cliente.index') }}">
            <button type="button">Voltar</button>
        </a>
    </form>
@endsection