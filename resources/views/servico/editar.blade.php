<form action="{{ route('servico.atualizar', $servico->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Tipo:</label>
    <input type="text" name="tipo" id="tipo" value="{{ $servico->tipo }}">

    <label for="">Valor:</label>
    <input type="text" name="valor" id="valor" value="{{ $servico->valor }}">

    <label for="">Empresa:</label>
    <select name="empresa_id" id="empresa_id">
        <option value="{{ $servico->empresa->id }}" {{ $servico->empresa->id == $servico->empresa_id ? 'selected':'' }}>
            {{ $servico->empresa->razao_social }}
        </option>
    </select>

    <label for="">Categoria:</label>
    <select name="categoria_id" id="categoria_id">
        <option value="{{ $servico->categoria->id }}" {{ $servico->categoria->id == $servico->categoria_id ? 'selected':'' }}>
            {{ $servico->categoria->tipo }}
        </option>
    </select>

    <button type="submit">Salvar</button>
    
    <a href="{{ route('servico.index')}}">
        <button>Voltar</button>
    </a>
</form>