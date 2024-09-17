<form action="{{ route('servico.atualizar', $servico->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Tipo:</label>
    <input type="text" name="tipo" id="tipo" value="{{ $servico->tipo }}">

    <label for="">Valor:</label>
    <input type="text" name="valor" id="valor" value="{{ $servico->valor }}">

    <label for="">Empresa:</label>
    <input type="text" name="empresa" id="empresa" value="{{ $servico->empresa->razao_social }}">

    <label for="">Categoria:</label>
    <input type="text" name="categoria" id="categoria" value="{{ $servico->categoria->tipo }}">
    
    <button type="submit">Salvar</button>
</form>