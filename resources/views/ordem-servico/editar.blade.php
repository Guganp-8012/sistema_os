<form action="{{ route('ordemServico.atualizar',$ordemServico->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Email: </label>
    <input type="text" name="email" id="email" value="{{ $ordemServico->email }}">

    <label for="">Telefone</label>
    <input type="text" name="telefone" id="telefone" value="{{$ordemServico->telefone }}">

    <button type="submit">Salvar</button>
</form>