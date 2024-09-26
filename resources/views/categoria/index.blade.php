@extends('layouts.base')

@section('title', 'Lista de Categorias')

@section('content')
    <nav>
        <ul>
            <a href="{{ route('categoria.index') }}"><li>Categoria</li></a>
            <a href="{{ route('cliente.index') }}"><li>Cliente</li></a>
            <a href="{{ route('contato.index') }}"><li>Contato</li></a>
            <a href="{{ route('empresa.index') }}"><li>Empresa</li></a>
            <a href="{{ route('produto.index') }}"><li>Produto</li></a>
            <a href="{{ route('servico.index') }}"><li>Serviço</li></a>
            <a href="{{ route('ordem-servico.index') }}"><li>Ordem de Serviço</li></a>
        </ul>
    </nav>

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
            
            <tr>
                <td colspan="3">
                    <a href="{{ route('categoria.cadastrar') }}">
                        <button>Cadastrar</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection