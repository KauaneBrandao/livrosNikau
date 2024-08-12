@extends('layouts.main')

@section('title','Livros Nikau')

@section('content')

<link rel="stylesheet" href="{{ ('css2/welcome.css') }}">
<link rel="stylesheet" href="{{ ('css2/styles.css') }}">

<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/Carrossel imagem 2.svg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/Carrossel imagem 3.svg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="parte1"><h1>Algumas opções que você pode gostar!</h1></div>

    <div class="card" style="width: 18rem;" id="exampleModal">
  <img src="../img/tronodevidro.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Trono de Vidro: A herdeira de fogo</h5>
    <p class="card-text">R$49,90</p>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Saiba Mais
      </button>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../img/harrypotter.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Harry Potter: E o prisioneiro de Azkaban</h5>
    <p class="card-text">R$50,00</p>
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


<!-- modais -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      A história de Celaena Sardothien, uma assassina a serviço de um rei tirânico, é uma fantasia épica repleta de ação, intriga e cenas de luta inesquecíveis. 
      No terceiro livro da saga, Herdeira do fogo , Celaena ressurge das cinzas ainda mais forte e letal. Com personagens complexos e reviravoltas de tirar o fôlego, o universo de Trono de vidro 
      se tornou um classico entre os amantes de fantasia, acumulando mais de um milhão de cópias vendidas e se tornando presença frequente nas listas dos mais vendidos.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection
