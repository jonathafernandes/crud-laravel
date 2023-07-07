@extends('layouts.app')

@section('title','Listagem de Jogos')

@section('content')
    <h2>Listagem dos Jogos</h2>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ano</th>
        <th scope="col">Preço</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jogos as $jogo)
        <tr>
            <th>{{$jogo->id}}</th>
            <th>{{$jogo->nome}}</th>
            <th>{{$jogo->categoria}}</th>
            <th>{{$jogo->ano_criacao}}</th>
            <th>{{$jogo->valor}}</th>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection