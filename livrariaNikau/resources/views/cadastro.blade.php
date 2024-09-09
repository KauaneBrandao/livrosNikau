@extends('layouts.main')

@section('title','Livros Nikau')

@section('content')

<link rel="stylesheet" href="{{ ('css/cadastro.css') }}">
<link rel="stylesheet" href="{{ ('css2/styles.css') }}">

<div>



    <!--Aqui adicionar a validação e mensagem -->

    @if($errors->any())

    <span class="erro">

        @foreach ($errors->all() as $error)

        {{$error}}<br>

        @endforeach

    </span>

    @endif


    </span>

    <!--Informar no cadastro o nome do grupo de metodos -->
    <form method="POST" action="{{ route('form.insert') }}">
        @csrf

        <div class="tudoform">
            <form class="d-flex mt-3" role="search" id="arere">



                <div class="form-wrapper">

                    <div class="titulo">
                        <h1>Cadastre-se!</h1>

                        <h3>Crie agora sua conta Nikau!</h3>
                    </div>
                    <form action="#">
                        <div class="form-control">

                            <label class="textinho">nome</label>
                            <input type="text" required>
                        </div>

                        <div class="form-control">

                            <label class="textinho" for="Email ou número de telefone">Email ou número de telefone</label>
                            <input type="text" required>
                        </div>

                        <div class="form-control">

                            <label for="datanascimento" class="textinho">Data de Nascimento</label>
                            <input type="date" name="datanascimento" class="form_input" id="datanascimento" placeholder="Data de Nascimento">
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
                            <label for="lembrar-de-mim">
                                <p class="vtnc">Lembrar de mim</p>
                            </label>
                        </div>
                    </div>
            </form>

    </form>
</div>
@endsection