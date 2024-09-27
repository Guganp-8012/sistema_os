@extends('layouts.base')

@section('title', 'Lista de Ordens de Serviço')

@section('content')
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cliente.index') }}" role="tab" aria-selected="false">Cliente</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('contato.index') }}" role="tab" aria-selected="false">Contato</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('produto.index') }}" role="tab" aria-selected="false">Produto</a>
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
            <a class="nav-link active" href="{{ route('ordem-servico.index') }}" role="tab" aria-selected="true">Ordem de Serviço</a>
        </li>
    </ul>

    <h2>Lista de Ordens de Serviço</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">DATA DE INÍCIO</th>
                <th scope="col">DATA DE FINALIZAÇÃO</th>
                <th scope="col">STATUS</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">CLIENTE</th>
                <th scope="col">SERVIÇO</th>
                <th scope="col">OPÇÕES</th>
            </tr>
        </thead>

        <tbody>
            @foreach($ordemServicos as $ordemServico)
                <tr>
                    <th scope="row">{{ $ordemServico->id }}</th>
                    <td>{{ $ordemServico->data_inicio }}</td>
                    <td>{{ $ordemServico->data_final }}</td>
                    <td>
                        @if ($ordemServico->status == 1)
                            <i class="fa-solid fa-square-check" style="color: #18bf00;"></i>
                        @else
                            <i class="fa-solid fa-square-xmark" style="color: #ff0000;"></i>  
                        @endif
                    </td>
                    <td>{{ $ordemServico->empresa->razao_social }}</td>
                    <td>{{ $ordemServico->cliente->nome }}</td>
                    <td>{{ $ordemServico->servico->tipo }}</td>
                    <td>
                        <div class="btns_formulario">
                            <a href="{{ route('ordem-servico.editar', $ordemServico->id) }}">
                                <button type="button" style="border: none; background: none;">
                                    <img src="https://img.icons8.com/?size=100&id=12082&format=png&color=000000"
                                    height="35" width="35"
                                    data-bs-toggle='tooltip'
                                    title="Editar Ordem de Serviço">
                                </button>
                            </a>

                            <form action="{{ route('ordem-servico.deletar', $ordemServico->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background: none;"><img src="https://img.icons8.com/?size=100&id=68064&format=png&color=000000"
                                    height="35" width="35"
                                    data-bs-toggle='tooltip'
                                    title="Excluir Ordem de Serviço">
                                </button>
                            </form>
                            
                            <form action="{{ route('ordem-servico.atualizarStatus', $ordemServico->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('POST')
                                <button type="submit">Concluir</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td>
                    <a href="{{ route('ordem-servico.cadastrar') }}">
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