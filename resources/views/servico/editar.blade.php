@extends('layouts.app')

@section('title', 'Editar Serviço')

@section('content')
    <h1>Editar Serviço</h1>

    <form action="{{ route('servico.atualizar', $servico->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" id="tipo" value="{{ $servico->tipo }}" required>

        <label for="valor">Valor:</label>
        <input type="text" name="valor" id="valor" value="{{ $servico->valor }}" required>

        <label for="empresa_id">Empresa:</label>
        <select name="empresa_id" id="empresa_id" required>
            @foreach($empresas as $empresa)
                <option value="{{ $empresa->id }}" {{ $empresa->id == $servico->empresa_id ? 'selected' : '' }}>
                    {{ $empresa->razao_social }}
                </option>
            @endforeach
        </select>

        <label for="categoria_id">Categoria:</label>
        <select name="categoria_id" id="categoria_id" required>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ $categoria->id == $servico->categoria_id ? 'selected' : '' }}>
                    {{ $categoria->tipo }}
                </option>
            @endforeach
        </select>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('servico.index') }}">
        <button type="button">Voltar</button>
    </a>
@endsection