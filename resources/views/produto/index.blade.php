@extends('layouts.base')

@section('title', 'Lista de Produtos')

@section('content')
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cliente.index') }}" role="tab" aria-selected="false">Cliente</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('contato.index') }}" role="tab" aria-selected="false">Contato</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="{{ route('produto.index') }}" role="tab" aria-selected="true">Produto</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('categoria.index') }}" role="tab" aria-selected="false">Categoria</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('empresa.index') }}" role="tab" aria-selected="false">Empresa</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('servico.index') }}" role="tab" aria-selected="false">Serviço</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('ordem-servico.index') }}" role="tab" aria-selected="false">Ordem de Serviço</a>
        </li>
    </ul>

    <h2>Lista de Produtos</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">VALOR</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">OPÇÕES</th>
            </tr>
        </thead>

        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <th scope="row">{{ $produto->id }}</th>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->valor }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>
                        <div class="btns_formulario">
                            <a href="{{ route('produto.editar', $produto->id) }}">
                                <button type="button" style="border: none; background: none;">
                                    <img src="https://img.icons8.com/?size=100&id=12082&format=png&color=000000"
                                    height="35" width="35"
                                    data-bs-toggle='tooltip'
                                    title="Editar Produto">
                                </button>
                            </a>

                            <form action="{{ route('produto.deletar', $produto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background: none;">
                                    <img src="https://img.icons8.com/?size=100&id=68064&format=png&color=000000"
                                    height="35" width="35"
                                    data-bs-toggle='tooltip'
                                    title="Excluir Produto">
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td style="text-align: right;">
                    <a href="{{ route('produto.cadastrar') }}">
                        <button class="btn btn-secondary">Cadastrar</button>
                    </a>

                    <a href="{{ url()->previous() }}">
                        <button class="btn btn-secondary">Voltar</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection