<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Serviço</title>
    </head>

    <body>
        <form action="{{ route('servico.salvar') }}" method="post">
            @csrf
            <label for="">Tipo: </label>
            <input type="text" name="tipo" id="tipo">

            <label for="">Valor</label>
            <input type="text" name="valor" id="valor">

            <label for="empresa_id">Empresa: </label>
            <select name="empresa_id" id="empresa_id">
                @foreach($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->razao_social }}</option>
                @endforeach
            </select>

            <label for="categoria_id">Categoria: </label>
            <select name="categoria_id" id="categoria_id">
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->tipo }}</option>
                @endforeach
            </select>
            
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>