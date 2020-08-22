@extends('templates.master')

@section('titulo','Lista de pessoas')

@section('conteudo')
<h1>Pessoas Cadastradas</h1>


<a class="btn btn-primary" href="/pessoas/create">Cadastrar Nova</a>
<hr>

{{-- 
    <p>Nome:  {{$p->nome}}<p>
    <p>Telefone:  {{$p->telefone}}<p>
    <p>Email:  {{$p->email}}<p>

    <hr>
     --}}


<table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    </thead>

    @foreach ($pessoas as $p)
    <tr>
        <td>{{$p->nome}}</td>
        <td>{{$p->telefone}}</td>
        <td>{{$p->email}}</td>
        <td>

            <a href="/pessoas/{{$p->id}}/edit">Editar</a>
            <a href="/pessoas/{{$p->id}}">Excluir</a>
        {{-- <a class="btn btn-outline-primary btn-sm" href="/pessoas/{{$p->id}}/edit">Editar</a> 
        <form action="/pessoas/{{$p->id}}" method="post">
        @csrf
        @method('DELETE')
        <input class="btn btn-outline-danger btn-sm" type="submit" value="Excluir">
        </form> --}}
        </td>
    </tr>
    @endforeach
</table>
@endsection

