<form action="{{ route('categoria.atualizar',$categoria->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Tipo: </label>
    <input type="text" name="tipo" id="tipo" value="{{ $categoria->tipo }}">
    
    <button type="submit">Salvar</button>
</form>