<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Contato</title>
    </head>

    <body>
        <form action="{{ route('contato.salvar') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Email: </label>
            <input type="text" name="email" id="email">

            <label for="">Telefone:</label>
            <input type="text" name="telefone" id="telefone">

            <label for="">Foto:</label>
            <input type="file" name="foto" id="foto">
            
            <button type="submit">Salvar</button>
        </form>
        
        <a href="{{ route('contato.index')}}">
            <button>Voltar</button>
        </a>
    </body>
</html>