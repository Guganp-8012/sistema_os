<form action="{{ route('produto.atualizar',$produto->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Nome: </label>
    <input type="text" name="nome" id="nome" value="{{ $produto->nome }}">
    <label for="">Valor</label>
    <input type="text" name="valor" id="valor" value="{{$produto->valor }}">
    <label for="">Descrição</label>
    <input type="text" name="descricao" id="descricao" value="{{$produto->descricao }}">
    <button type="submit">Salvar</button>
</form>