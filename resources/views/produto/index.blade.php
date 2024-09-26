@extends('layouts.base')

@section('title', 'Lista de Produtos')

@section('content')
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
                                <span>Editar</span>
                            </a>

                            <form action="{{ route('produto.deletar', $produto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            
            <tr>
                <td colspan="5" style="text-align: right;">
                    <a href="{{ route('produto.cadastrar') }}">
                        <button>Cadastrar</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection