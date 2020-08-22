@extends('templates.master')
@section('titulo','Exclusão')

@section('conteudo')
<h1>Deseja mesmo excluir a pessoa '{{$pessoa->nome}}'?</h1>

<form action="/pessoas/{{$pessoa->id}}" method="post">
    @csrf
    @method('DELETE')
    <input class="btn btn-danger" type="submit" value="Sim">
</form>

<a class="btn btn-primary" href="/pessoas">Não</a> 

@endsection