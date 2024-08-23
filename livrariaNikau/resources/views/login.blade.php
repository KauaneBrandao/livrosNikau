@extends('layouts.main')

@section('title','Livros Nikau')

@section('content')

<link rel="stylesheet" href="{{ ('css2/login.css') }}">
<link rel="stylesheet" href="{{ ('css2/styles.css') }}">



<div>


<div class="tudoform">
<form class="d-flex mt-3" role="search" id="arere">



<div class="form-wrapper">
    
    <div class="titulo">
    <h1>Descubra mais!</h1>
   
    <h3>Para realizar essa ação, entre na sua conta Nikau!</h3>
    </div>
    <form action="#">

        <div class="form-control">         
           
            <label class="textinho" for="Email ou número de telefone">Email ou número de telefone</label>
            <input type="text" required>
        </div>

        <div class="form-control">
        
            <label class="textinho" for="Senha">Senha</label>
            <input type="password" required>
        </div>

        <div class="botaogeral">
        <button type="submit" class="botao">Entrar</button>
        </div>

        <div class="primeiravez">
            <h2 class="primeiravez">Primeira vez aqui?</h2>
        </div>
        </form>
        
        <div class="botaogeral">
        <a href="cadastro.php"><button type="submit" class="botaoCadastro">Cadastrar</button></a>
        </div>
        <div class="form-help">
            <div class="lembrar-de-mim ">
                <input type="checkbox" id="lembrar-de-mim">
                <label for="lembrar-de-mim"><p class="vtnc">Lembrar de mim</p></label>
            </div>
        </div>
    </form>

    </form>
    </div>
    @endsection