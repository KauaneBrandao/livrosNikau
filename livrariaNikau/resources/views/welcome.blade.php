@extends('layouts.main')

@section('title','Livros Nikau')

@section('content')

<link rel="stylesheet" href="{{ ('css2/welcome.css') }}">
<link rel="stylesheet" href="{{ ('css2/styles.css') }}">


<div class="tudo">

<div class="imagem">
  <div><img src="../img/fundodvdd.svg" alt=""></div>
</div>

<div class="principal1">

  <div class="pt">
    <div class="icon"><i class="material-icons">favorite</i></div>
    <div><h4 class="desc">Junte-se à nossa comunidade de leitores, participe de clubes do livro virtuais e descubra recomendações personalizadas.</h4></div>
  </div>
  <div class="pt">
    <div class="icon"><i class="material-icons">dashboard</i></div>
    <div><h4 class="desc">Oferecemos livros para todos os gostos, seja você fã de aventuras épicas, histórias comoventes ou insights profundos.</h4></div>
  </div>
  <div class="pt">
    <div class="icon"><i class="material-icons">book</i></div>
    <div><h4 class="desc">Encontre grandes clássicos e best-sellers que marcaram época e continuam a cativar leitores em todo o mundo.</h4></div>
  </div>
</div>

<div class="text">Algumas opções que você pode gostar!<h1></h1></div>

<div class="cardprincipal">

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>

</div>


@endsection
