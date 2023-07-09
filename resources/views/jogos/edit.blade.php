@extends('layouts.app')

@section('title','Editar Jogo')

@section('content')
    <div class="container m-5">
        <h3>Editar Jogo</h3>
        <hr>
        <form action="{{ route('jogos-update', ['id'=>$jogos->id]) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{$jogos ->nome}}" placeholder="Digite um nome...">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{$jogos->categoria}}" placeholder="Digite a categoria...">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="ano_criacao">Ano:</label>
                    <input type="number" class="form-control" name="ano_criacao" value="{{$jogos->ano_criacao}}" placeholder="Digite o ano de criação...">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="valor">Preço:</label>
                    <input type="number" class="form-control" name="valor" value="{{$jogos->valor}}" placeholder="Digite o preço...">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info" value="Atualizar">
            </div>
        </form>
    </div>
@endsection