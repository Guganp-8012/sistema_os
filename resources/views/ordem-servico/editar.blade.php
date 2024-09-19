<form action="{{ route('ordem-servico.atualizar', $ordemServico->id) }}" method="post">
    @csrf
    @method('PUT')

    <label for="">Data de Início:</label>
    <input type="date" name="data_inicio" id="data_inicio" value="{{ $ordemServico->data_inicio }}">

    <label for="">Data de Finalização:</label>
    <input type="date" name="data_final" id="data_final" value="{{ $ordemServico->data_final }}">

    <label for="">Status:</label>
    <select name="status" id="status">
        <option value="1" @if ($ordemServico->status == 1) selected @endif>Em andamento</option>
        <option value="0" @if ($ordemServico->status == 0) selected @endif>Concluído</option>
    </select>

    <label for="">Empresa:</label>
    <select name="empresa_id" id="empresa_id">
        <option value="{{ $ordemServico->empresa->id }}" @if ($ordemServico->empresa->id == $ordemServico->empresa_id) selected @endif>
            {{ $ordemServico->empresa->razao_social }}
        </option>
    </select>

    <label for="">Cliente:</label>
    <select name="cliente_id" id="cliente_id">
        <option value="{{ $ordemServico->cliente->id }}" @if ($ordemServico->cliente->id == $ordemServico->cliente_id) selected @endif>
            {{ $ordemServico->cliente->nome }}
        </option>
    </select>   

    <label for="">Serviço:</label>
    <select name="servico_id" id="servico_id">
        <option value="{{ $ordemServico->servico->id }}" @if ($ordemServico->servico->id == $ordemServico->servico_id) selected @endif>
            {{ $ordemServico->servico->tipo }}
        </option>
    </select>

    <button type="submit">Salvar</button>
    
    <a href="{{ route('ordem-servico.index') }}">
        <button type="button">Voltar</button>
    </a>
</form>