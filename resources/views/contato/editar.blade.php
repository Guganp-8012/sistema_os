<h1>Editar Contato</h1>

<form action="{{ route('contato.atualizar', $contato->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Email: </label>
    <input type="text" name="email" id="email" value="{{ $contato->email }}">
    
    <label for="">Telefone:</label>
    <input type="text" name="telefone" id="telefone" value="{{ $contato->telefone }}">

    <label>Foto:</label>
    <input type="file" name="foto" id="foto" >

    <img src="{{ asset('storage/' . $contato->foto) }}" alt="" width="100" height="100">

    <button type="submit">Salvar</button>
    
    <a href="{{ route('contato.index')}}">
        <button>Voltar</button>
    </a>
</form>