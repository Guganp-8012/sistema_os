<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Cliente</title>
    </head>

    <body>
        <h2>Lista de Contatos</h2>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">DATA DE NASCIMENTO</th>
                <th scope="col">FOTO</th>
                <th scope="col">STATUS</th>
                <th scope="col">OPÇÕES</th>
                </tr>
            </thead>

            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <th scope="row">{{ $cliente->id }}</th>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->data_nascimento }}</td>
                        <td>{{ $cliente->foto }}</td>
                        <td>{{ $cliente->status }}</td>
                        <td>
                            <div class="btns_formulario">
                                <a href="{{ route('cliente.editar', $cliente->id) }}">
                                    <span>Editar</span>
                                </a>

                                <form action="{{ route('cliente.deletar', $cliente->id) }}" method="POST" style="display:inline;">
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