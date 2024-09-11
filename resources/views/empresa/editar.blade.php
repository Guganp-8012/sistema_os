<form action="{{ route('empresa.atualizar',$empresa->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Razão Social: </label>
    <input type="text" name="razao_social" id="razao_social" value="{{ $empresa->razaoSocial }}">
    <label for="">CNPJ: </label>
    <input type="text" name="cnpj" id="cnpj" value="{{ $empresa->cnpj }}">
    <label for="">Endereço: </label>
    <input type="text" name="endereco" id="endereco" value="{{ $empresa->endereco }}">
    <label for="">Telefone</label>
    <input type="text" name="telefone" id="telefone" value="{{ $empresa->telefone }}">
    <button type="submit">Salvar</button>
</form>