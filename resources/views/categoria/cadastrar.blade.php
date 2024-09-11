<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Categoria</title>
    </head>

    <body>
        <form action="{{ route('categoria.salvar') }}" method="post">
            @csrf
            <label for="">Tipo: </label>
            <input type="text" name="tipo" id="tipo">
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>