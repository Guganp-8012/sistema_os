<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Empresa</title>
    </head>

    <body>
        <form action="{{ route('empresa.salvar') }}" method="post">
            @csrf
            <label for="">Razão Social: </label>
            <input type="text" name="razao_social" id="razao_social">
            
            <label for="">CNPJ</label>
            <input type="text" name="cnpj" id="cnpj">

            <label for="">Endereço</label>
            <input type="text" name="endereco" id="endereco">

            <label for="">Telefone</label>
            <input type="text" name="telefone" id="telefone">

            <button type="submit">Salvar</button>
        </form>
        
        <a href="{{ route('empresa.index')}}">
            <button>Voltar</button>
        </a>
    </body>
</html>