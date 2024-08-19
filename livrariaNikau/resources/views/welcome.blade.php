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

<div class="card" style="width: 22rem;">
  <div class="img-area">
  <img src="../img/assimqueacaba.png" class="card-img-top" alt="...">
</div>
  <div class="card-body">
    <h3 class="card-title">É Assim que acaba</h3>
    <p class="card-text">R$49,90</p>
    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal1">
    Ver mais
</button>
  </div>
</div>

<div class="card" style="width: 22rem;">
<div class="img-area">
  <img src="../img/amoregelato.png" class="card-img-top" alt="...">
</div>
  <div class="card-body">
    <h3 class="card-title">Amor e Gelato</h3>
    <p class="card-text">R$29,90</p>
    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal2">
    Ver mais
</button>
  </div>
</div>

<div class="card" style="width: 22rem;">
  <div class="img-area">
  <img src="../img/pqnprincipe.png" class="card-img-top" alt="...">
  </div>
  <div class="card-body">
    <h3 class="card-title">O Pequeno Princípe</h3>
    <p class="card-text">R$29,90</p>
    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal3">
  Ver mais
</button>
  </div>
</div>

<div class="card" style="width: 22rem;">
  <div class="img-area">
  <img src="../img/4estacoes.png" class="card-img-top" alt="...">
  </div>
  <div class="card-body">
    <h3 class="card-title">As primeiras 4 estações</h3>
    <p class="card-text">R$30,00</p>
    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal4">
  Ver mais
</button>
  </div>
</div>

</div>
<div class="cardprin2">

<div class="card" style="width: 22rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 22rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 22rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" style="width: 22rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="foto"><img src="../img/assimqueacaba.png" alt=""></div>
        <div class="assunto">fkeofkoesfkosefeofewofweofmweofmwmfweo</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>

  
<div class="ads">
  sxscscscs
</div>

</div>


</div>


@endsection
