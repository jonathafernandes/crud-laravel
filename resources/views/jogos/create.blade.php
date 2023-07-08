@extends('layouts.app')

@section('title','Novo Jogo')

@section('content')
    <div class="container m-5">
        <h3>Novo Jogo</h3>
        <form action="{{route('jogos-store')}}" method="POST">
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" placeholder="Digite a categoria...">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="ano_criacao">Ano:</label>
                    <input type="number" class="form-control" name="ano_criacao" placeholder="Digite o ano de criação...">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="valor">Preço:</label>
                    <input type="number" class="form-control" name="valor" placeholder="Digite o preço...">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-outline-info">
            </div>
        </form>
    </div>
@endsection