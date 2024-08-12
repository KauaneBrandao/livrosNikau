@extends('layouts.main')

@section('title','Livros Nikau')

@section('content')
<link rel="stylesheet" href="{{ asset ('css/login.css') }}">

<div class="form-wrapper" id="formulario">
    
    <h1>Faça seu Cadastro</h1>
    <h3>Para adicionar esse item ao seu carrinho crie uma conta na Nikau!</h3>
    <form action="#">

    <div class="inputs">
    <div class="row">
        
        <div class="col-md-6">

            <div class="form-group">
                <input type="text" class="form-control" id="Nome" required>
                <label for="Nome" class="nomezinho">Nome </label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="Sobrenome"  required>
                <label for="Sobrenome" class="nomezinho">Sobrenome</label>
            </div>
        </div>

        <div class="w-100 d-none d-md-block"></div>
        

        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="Telefone"  required>
                <label for="Telefone" >Telefone</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="Email"  required>
                <label for="Email">Email</label>
            </div>
        </div>


        <div class="w-100 d-none d-md-block"></div>
        
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="cpf" data-mask="000.000.000-00"  required>
                <label for="cpf" >CPF</label>
            </div>
        </div>

    



    </div>
</div>


        <a href=""><button type="submit" class="botaoCadastro">Cadastrar</button></a>
        <div class="form-help">
            <div class="lembrar-de-mim ">
                <input type="checkbox" id="lembrar-de-mim">
                <label for="lembrar-de-mim">Lembrar de mim</label>
            <!-- </div>
            <a href="#">Precisa de ajuda?</a>
        </div> -->
    </form>
@endsection
