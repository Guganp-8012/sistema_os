<form action="{{ route('servico.atualizar',$servico->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Tipo: </label>
    <input type="text" name="tipo" id="tipo" value="{{ $servico->tipo }}">

    <label for="">Valor:</label>
    <input type="text" name="valor" id="valor" value="{{ $servico->valor  }}">
    
    <button type="submit">Salvar</button>
</form>