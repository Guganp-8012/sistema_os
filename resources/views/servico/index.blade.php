@extends('layouts.app')

@section('title', 'Lista de Serviços')

@section('content')
    <h2>Lista de Serviços</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TIPO</th>
                <th scope="col">VALOR</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">OPÇÕES</th>
            </tr>
        </thead>

        <tbody>
            @foreach($servicos as $servico)
                <tr>
                    <th scope="row">{{ $servico->id }}</th>
                    <td>{{ $servico->tipo }}</td>
                    <td>{{ $servico->valor }}</td>
                    <td>{{ $servico->empresa->razao_social }}</td>
                    <td>{{ $servico->categoria->tipo }}</td>
                    <td>
                        <div class="btns_formulario">
                            <a href="{{ route('servico.editar', $servico->id) }}">
                                <span>Editar</span>
                            </a>

                            <form action="{{ route('servico.deletar', $servico->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            
            <tr>
                <td colspan="6" style="text-align: right;">
                    <a href="{{ route('servico.cadastrar') }}">
                        <button>Cadastrar</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection