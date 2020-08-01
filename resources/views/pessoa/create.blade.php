<h1>Formulário de Cadastro de Pessoas</h1>

<form action="/pessoas" method="POST">
@csrf
<input type="text" name="nome" >
<input type="text" name="telefone" >
<input type="text" name="email">
<button type="submit">Salvar</button>
</form>

<br>

<a href="/pessoas">voltar</a>