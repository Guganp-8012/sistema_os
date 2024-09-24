<form action="" method="post">
    <label for="">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="">Email</label>
    <input type="text" name="email" id="email">
    <label for="">Mensagem</label>
    <textarea name="mensagem" id="" cols="30" rows="10"></textarea>
</form>

<a href="{{ route('contato.index')}}">
    <button>Voltar</button>
</a>