<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Ordem de Serviço</title>
    </head>

    <body>
        <form action="{{ route('ordem-servico.salvar') }}" method="post">
            @csrf
            <label for="">Data de Início:</label>
            <input type="date" name="data_inicio" id="data_inicio">
            
            <label for="">Data de Finalização:</label>
            <input type="date" name="data_final" id="data_final">
            
            <label for="">Status:</label>
            <select name="status" id="status">
                <option value="1">Em andamento</option>
                <option value="0">Concluído</option>
            </select>

            <label for="">Empresa:</label>
            <select name="empresa_id" id="empresa_id">
                @foreach($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->razao_social }}</option>
                @endforeach
            </select>

            <label for="">Cliente:</label>
            <select name="cliente_id" id="cliente_id">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>

            <label for="">Servico:</label>
            <select name="servico_id" id="servico_id">
                @foreach($servicos as $servico)
                    <option value="{{ $servico->id }}">{{ $servico->tipo }}</option>
                @endforeach
            </select>
            
            <button type="submit">Salvar</button>
        </form>
        
        <a href="{{ route('ordem-servico.index')}}">
            <button>Voltar</button>
        </a>
    </body>
</html>