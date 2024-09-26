@extends('layouts.base')

@section('title', 'Editar Ordem de Serviço')

@section('content')
    <h1>Editar Ordem de Serviço</h1>

    <form action="{{ route('ordem-servico.atualizar', $ordemServico->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="data_inicio">Data de Início:</label>
        <input type="date" name="data_inicio" id="data_inicio" value="{{ $ordemServico->data_inicio }}" required>

        <label for="data_final">Data de Finalização:</label>
        <input type="date" name="data_final" id="data_final" value="{{ $ordemServico->data_final }}" required>

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="1" @if ($ordemServico->status == 1) selected @endif>Em andamento</option>
            <option value="0" @if ($ordemServico->status == 0) selected @endif>Concluído</option>
        </select>

        <label for="empresa_id">Empresa:</label>
        <select name="empresa_id" id="empresa_id" required>
            @foreach($empresas as $empresa)
                <option value="{{ $empresa->id }}" @if ($ordemServico->empresa_id == $empresa->id) selected @endif>
                    {{ $empresa->razao_social }}
                </option>
            @endforeach
        </select>

        <label for="cliente_id">Cliente:</label>
        <select name="cliente_id" id="cliente_id" required>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}" @if ($ordemServico->cliente_id == $cliente->id) selected @endif>
                    {{ $cliente->nome }}
                </option>
            @endforeach
        </select>

        <label for="servico_id">Serviço:</label>
        <select name="servico_id" id="servico_id" required>
            @foreach($servicos as $servico)
                <option value="{{ $servico->id }}" @if ($ordemServico->servico_id == $servico->id) selected @endif>
                    {{ $servico->tipo }}
                </option>
            @endforeach
        </select>

        <button type="submit">Salvar</button>
        
        <a href="{{ route('ordem-servico.index') }}">
            <button type="button">Voltar</button>
        </a>
    </form>
@endsection