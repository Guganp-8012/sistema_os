<form action="{{ route('ordem-servico.atualizar', $ordemServico->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Data de Início:</label>
    <input type="date" name="data_inicio" id="data_inicio" value="{{ $ordemServico->data_inicio }}">

    <label for="">Data de Finalização:</label>
    <input type="date" name="data_final" id="data_final" value="{{ $ordemServico->data_final }}">

    <label for="">Status:</label>
    <input type="text" name="status" id="status" value="{{ $ordemServico->status }}">

    <label for="">Empresa:</label>
    <input type="text" name="empresa" id="empresa" value="{{ $ordemServico->empresa->razao_social }}">

    <label for="">Cliente:</label>
    <input type="text" name="cliente" id="cliente" value="{{ $ordemServico->cliente->nome }}">

    <label for="">Serviço:</label>
    <input type="text" name="servico" id="servico" value="{{ $ordemServico->servico->tipo }}">
    
    <button type="submit">Salvar</button>
</form>