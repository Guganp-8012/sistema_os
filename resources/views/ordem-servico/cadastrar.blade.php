@extends('layouts.base')

@section('title', 'Cadastrar Ordem de Serviço')

@section('content')
    <h1>Cadastrar Ordem de Serviço</h1>

    <form action="{{ route('ordem-servico.salvar') }}" method="post">
        @csrf

        <label for="data_inicio">Data de Início:</label>
        <input type="date" name="data_inicio" id="data_inicio" required>

        <label for="data_final">Data de Finalização:</label>
        <input type="date" name="data_final" id="data_final" required>

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="1">Em andamento</option>
            <option value="0">Concluído</option>
        </select>

        <label for="empresa_id">Empresa:</label>
        <select name="empresa_id" id="empresa_id" required>
            @foreach($empresas as $empresa)
                <option value="{{ $empresa->id }}">{{ $empresa->razao_social }}</option>
            @endforeach
        </select>

        <label for="cliente_id">Cliente:</label>
        <select name="cliente_id" id="cliente_id" required>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select>

        <label for="servico_id">Serviço:</label>
        <select name="servico_id" id="servico_id" required>
            @foreach($servicos as $servico)
                <option value="{{ $servico->id }}">{{ $servico->tipo }}</option>
            @endforeach
        </select>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('ordem-servico.index') }}">
        <button>Voltar</button>
    </a>
@endsection