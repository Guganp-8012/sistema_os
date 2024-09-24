@extends('layouts.app')

@section('title', 'Lista de Contatos')

@section('content')
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
                                <span>Editar</span>
                            </a>
                            <form action="{{ route('contato.deletar', $contato->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
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

    <a href="{{ route('contato.cadastrar') }}">
        <button>Cadastrar</button>
    </a>

    <a href="{{ route('mensagem.index') }}">
        <button>Mensagem</button>
    </a>
@endsection