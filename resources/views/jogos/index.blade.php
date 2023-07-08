@extends('layouts.app')

@section('title','Listagem dos Jogos')

@section('content')
    <div class="container m-5">
        <div class="row">
            <div class="col-sm-10">
                <h3>Listagem dos Jogos</h3>
            </div>
            <div class="col-sm-2">
                <a href="{{route('jogos-create')}}" class="btn btn-info">Novo Jogo</a>
            </div>
        </div>
        <br>
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
    </div>
@endsection