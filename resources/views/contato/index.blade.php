<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Contato</title>
        <!--
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{% static 'js/validacoes_contato.js' %}"></script>
        -->
    </head>

    <body>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">EMAIL</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contatos as $contato)
                    <tr>
                        <th scope="row">{{ $contato->id }}</th>
                        <td>{{ $contato->telefone }}</td>
                        <td>{{ $contato->email }}</td>
                        <td>
                            <div class="btns_formulario">
                                <a href="">
                                    <span>Editar Cliente</span>
                                </a>
                                <a href="">
                                    <span>Excluir Cliente</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>