@extends('layouts.base')

@section('title', 'Lista de Empresas')

@section('content')
    <h2>Lista de Empresas</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">RAZÃO SOCIAL</th>
                <th scope="col">CNPJ</th>
                <th scope="col">ENDEREÇO</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">OPÇÕES</th>
            </tr>
        </thead>

        <tbody>
            @foreach($empresas as $empresa)
                <tr>
                    <th scope="row">{{ $empresa->id }}</th>
                    <td>{{ $empresa->razao_social }}</td>
                    <td>{{ $empresa->cnpj }}</td>
                    <td>{{ $empresa->endereco }}</td>
                    <td>{{ $empresa->telefone }}</td>
                    <td>
                        <div class="btns_formulario">
                            <a href="{{ route('empresa.editar', $empresa->id) }}">
                                <span>Editar</span>
                            </a>

                            <form action="{{ route('empresa.deletar', $empresa->id) }}" method="POST" style="display:inline;">
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
                    <a href="{{ route('empresa.cadastrar') }}">
                        <button>Cadastrar</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection