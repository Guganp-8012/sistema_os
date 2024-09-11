<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Contato</title>
    </head>

    <body>
        <h2>Lista de Contatos</h2>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">EMAIL</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">OPÇÕES</th>
                </tr>
            </thead>

            <tbody>
                @foreach($ordemServicos as $ordemServico)
                    <tr>
                        <th scope="row">{{ $ordemServico->id }}</th>
                        <td>{{ $ordemServico->email }}</td>
                        <td>{{ $ordemServico->telefone }}</td>
                        <td>
                            <div class="btns_formulario">
                                <a href="{{ route('ordemServico.editar', $ordemServico->id) }}">
                                    <span>Editar</span>
                                </a>

                                <form action="{{ route('ordemServico.deletar', $ordemServico->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>