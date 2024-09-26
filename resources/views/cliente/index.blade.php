@extends('layouts.base')

@section('title', 'Lista de Clientes')

@section('content')
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
                    <td>{{ $cliente->data_nascimento }}</td>
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
                                <span>Editar</span>
                            </a>

                            <form action="{{ route('cliente.deletar', $cliente->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                            </form>

                            <form action="{{ route('cliente.atualizarStatus', $cliente->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('POST')
                                <button type="submit">Ativar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td colspan="6" style="text-align: right;">
                    <a href="{{ route('cliente.cadastrar') }}">
                        <button>Cadastrar</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection