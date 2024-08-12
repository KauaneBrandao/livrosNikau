@extends('layouts.main')

@section('title','Livros Nikau')

@section('content')

<link rel="stylesheet" href="{{ asset ('css/login.css') }}">

<div>

<form class="d-flex mt-3" role="search" id="arere">

<div class="form-wrapper">
    
    <h1>Descubra mais!</h1>
    <h3>Para adicionar esse item ao seu carrinho, entre na sua conta Nikau!</h3>
    <form action="#">

        <div class="form-control">         
            <input type="text" required>
            <label class="dentro" for="Email ou número de telefone">Email ou número de telefone</label>
        </div>

        <div class="form-control">
            <input type="password" required>
            <label class="dentro" for="Senha">Senha</label>
        </div>

        <button type="submit" class="botao">Entrar</button>

        <h2 class="primeiravez">Primeira vez aqui?</h2>
        </form>
        
        <a href="cadastro.php"><button type="submit" class="botaoCadastro">Cadastrar</button></a>

        <div class="form-help">
            <div class="lembrar-de-mim ">
                <input type="checkbox" id="lembrar-de-mim">
                <label for="lembrar-de-mim">Lembrar de mim</label>
            </div>
            <a href="#">Precisa de ajuda?</a>
        </div>
    </form>

    </form>
    @endsection