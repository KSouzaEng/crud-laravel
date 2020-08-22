@extends('templates.master')
@section('titulo','Formulario')

@section('conteudo')
    


@if (isset($pessoa))
<h1>Atualizar pessoas</h1>
<form action="/pessoas/{{$pessoa->id}}" method="POST">
@method('PUT')
@else
<form action="/pessoas" method="POST">
    <h1>Formulário de Cadastro de Pessoas</h1>
@endif
@csrf
<label for="nome">Nome</label>
<input type="text" name="nome" value="{{$pessoa->nome ?? ''}}" required>
<label for="telefone">Telefone</label>
<input type="text" name="telefone" value="{{$pessoa->telefone ?? ''}}"  required>
<label for="email">Email</label>
<input type="text" name="email" value="{{$pessoa->email ?? ''}}"  required>
<button type="submit">Salvar</button>
</form>

<br>

<a href="/pessoas">voltar</a>
@endsection