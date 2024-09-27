@extends('layouts.base')

@section('title', 'Lista de Contatos')

@section('content')
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cliente.index') }}" role="tab" aria-selected="false">Cliente</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="{{ route('contato.index') }}" role="tab" aria-selected="true">Contato</a>
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

    <h2>Lista de Contatos</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">EMAIL</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">FOTO</th>
                <th scope="col">STATUS</th>
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
                        @if ($contato->status == 1)
                            <i class="fa-solid fa-square-check" style="color: #18bf00;"></i>
                        @else
                            <i class="fa-solid fa-square-xmark" style="color: #ff0000;"></i>  
                        @endif
                    </td>
                    <td>
                        <div class="btns_formulario">
                            <a href="{{ route('contato.editar', $contato->id) }}">
                                <button type="button" style="border: none; background: none;">
                                    <img src="https://img.icons8.com/?size=100&id=12082&format=png&color=000000"
                                    height="35" width="35"
                                    data-bs-toggle='tooltip'
                                    title="Editar Contato">
                                </button>
                            </a>

                            <form action="{{ route('contato.deletar', $contato->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background: none;">
                                    <img src="https://img.icons8.com/?size=100&id=68064&format=png&color=000000"
                                    height="35" width="35"
                                    data-bs-toggle='tooltip'
                                    title="Excluir Contato"></button>
                            </form>

                            <form action="{{ route('contato.atualizarStatus', $contato->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('POST')
                                <button type="submit">Ativar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="text-align: right;">
        <a href="{{ route('contato.cadastrar') }}">
            <button class="btn btn-secondary">Cadastrar</button>
        </a>

        <a href="{{ url()->previous() }}">
            <button class="btn btn-secondary">Voltar</button>
        </a>
    </div>
@endsection