@extends('layouts.base')

@section('title', 'Cadastrar Serviço')

@section('content')
    <h1>Cadastrar Serviço</h1>

    <form action="{{ route('servico.salvar') }}" method="post">
        @csrf

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" id="tipo" required>

        <label for="valor">Valor:</label>
        <input type="text" name="valor" id="valor" required>

        <label for="empresa_id">Empresa:</label>
        <select name="empresa_id" id="empresa_id" required>
            @foreach($empresas as $empresa)
                <option value="{{ $empresa->id }}">{{ $empresa->razao_social }}</option>
            @endforeach
        </select>

        <label for="categoria_id">Categoria:</label>
        <select name="categoria_id" id="categoria_id" required>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->tipo }}</option>
            @endforeach
        </select>
        
        <button type="submit">Salvar</button>
    </form>
    
    <a href="{{ route('servico.index') }}">
        <button type="button">Voltar</button>
    </a>
@endsection