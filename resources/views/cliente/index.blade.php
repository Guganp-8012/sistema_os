@extends('layouts.base')

@section('title', 'Lista de Clientes')

@section('content')
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('cliente.index') }}" role="tab" aria-selected="true">Cliente</a>
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
            <a class="nav-link" href="{{ route('ordem-servico.index') }}" role="tab" aria-selected="false">Ordem de Serviço</a>
        </li>
    </ul>

    <h2>Lista de Clientes</h2>

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
                    <td>
                        @if($cliente->data_nascimento)
                            {{ date('d/m/Y', strtotime($cliente->data_nascimento)) }}
                        @else
                            Data Indisponível
                        @endif
                    </td>
                    <td>
                        @if($cliente->foto)
                            <img src="{{ asset('storage/' . $cliente->foto) }}" alt="foto" style="max-width: 100px; max-height: 100px;">
                        @else
                            Sem foto
                        @endif
                    </td>
                    <td>
                        @if ($cliente->status == 1)
                            <i class="fa-solid fa-square-check" style="color: #18bf00;"></i>
                        @else
                            <i class="fa-solid fa-square-xmark" style="color: #ff0000;"></i>  
                        @endif
                    </td>
                    <td>
                        <div class="btns_formulario">
                            <a href="{{ route('cliente.editar', $cliente->id) }}">
                                <button type="button" style="border: none; background: none;">
                                    <img src="https://img.icons8.com/?size=100&id=12082&format=png&color=000000"
                                    height="35" width="35"
                                    data-bs-toggle='tooltip'
                                    title="Editar Cliente">
                                </button>
                            </a>

                            <form action="{{ route('cliente.deletar', $cliente->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background: none;">
                                    <img src="https://img.icons8.com/?size=100&id=68064&format=png&color=000000"
                                    height="35" width="35"
                                    data-bs-toggle='tooltip'
                                    title="Excluir Cliente"></button>
                            </form>

                            <form action="{{ route('cliente.atualizarStatus', $cliente->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('POST')
                                <button type="submit" style="border: none; background: none;">Ativar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td>
                    <a href="{{ route('cliente.cadastrar') }}">
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