<form action="{{ route('cliente.atualizar',$cliente->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Nome: </label>
    <input type="text" name="nome" id="nome" value="{{ $cliente->nome }}">
    <label for="">Data de Nascimento</label>
    <input type="text" name="data_nascimento" id="data_nascimento" value="{{$cliente->data_nascimento }}">
    <label for="">Foto</label>
    <input type="text" name="foto" id="foto" value="{{$cliente->foto }}">
    <label for="">Status</label>
    <input type="text" name="status" id="status" value="{{$cliente->status }}">
    <button type="submit">Salvar</button>
</form>