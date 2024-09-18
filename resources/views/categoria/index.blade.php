<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Categoria</title>
    </head>

    <body>
        <h2>Lista de Categorias</h2>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">TIPO</th>
                <th scope="col">OPÇÕES</th>
                </tr>
            </thead>

            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <th scope="row">{{ $categoria->id }}</th>
                        <td>{{ $categoria->tipo }}</td>
                        <td>
                            <div class="btns_formulario">
                                <a href="{{ route('categoria.editar', $categoria->id) }}">
                                    <span>Editar</span>
                                </a>

                                <form action="{{ route('categoria.deletar', $categoria->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                
                <a href="{{ route('categoria.cadastrar')}}">
                    <button>Cadastrar</button>
                </a>
            </tbody>
        </table>
    </body>
</html>