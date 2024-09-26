@extends('layouts.base')

@section('title', 'Lista de Ordens de Serviço')

@section('content')
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
                                <span>Editar</span>
                            </a>

                            <form action="{{ route('ordem-servico.deletar', $ordemServico->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
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
                <td colspan="8" style="text-align: right;">
                    <a href="{{ route('ordem-servico.cadastrar') }}">
                        <button>Cadastrar</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection