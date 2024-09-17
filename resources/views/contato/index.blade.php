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
                <th scope="col">FOTO</th>
                <th scope="col">OPÇÕES</th>
                </tr>
            </thead>

            <tbody>
                @foreach($contatos as $contato)
                    <tr>
                        <th scope="row">{{ $contato->id }}</th>
                        <td>{{ $contato->email }}</td>
                        <td>{{ $contato->telefone }}</td>

                        <td>
                            @if($contato->foto)
                                <img src="{{ asset('storage/' . $contato->foto) }}" alt="foto" style="max-width: 100px; max-height: 100px;">
                            @else
                                Sem foto
                            @endif
                        </td>

                        <td>
                            <div class="btns_formulario">
                                <a href="{{ route('contato.editar', $contato->id) }}">
                                    <span>Editar</span>
                                </a>

                                <form action="{{ route('contato.deletar', $contato->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

                <a href="{{ route('contato.cadastrar')}}">
                    <button>Cadastrar</button>
                </a>
            </tbody>
        </table>
    </body>
</html>