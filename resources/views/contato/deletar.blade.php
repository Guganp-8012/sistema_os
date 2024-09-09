@foreach ($contatos as $contato)
    <div>
        <p>{{ $contato->email }} - {{ $contato->telefone }}</p>
        <form action="{{ route('contato.deletar', $contato->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </div>
@endforeach
