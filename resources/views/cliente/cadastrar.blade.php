<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Cliente</title>
    </head>

    <body>
        <form action="{{ route('cliente.salvar') }}" method="post">
            @csrf
            <label for="">Nome: </label>
            <input type="text" name="nome" id="nome">
            <label for="">Data de Nascimento:</label>
            <input type="text" name="data_nascimento" id="data_nascimento">
            <label for="">Foto: </label>
            <input type="text" name="foto" id="foto">
            <label for="">Status: </label>
            <input type="text" name="status" id="status">
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>