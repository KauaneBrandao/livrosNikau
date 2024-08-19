@extends('layouts.main')

@section('title','Livros Nikau')

@section('content')

<link rel="stylesheet" href="{{ ('css2/contato.css') }}">
<link rel="stylesheet" href="{{ ('css2/styles.css') }}">





<form class="row g-3" #>
 
<div id="formulario">
  <div class="col-md-12">
  <div class="titulo"><h2>Fale Conosco!</h2></div>
   <div id="coisas">
    <label for="inputEmail4" class="form-label">Nome:</label>
    <input type="Nome" class="form-control" id="inputNome6">
  </div>
  <div class="col-md-12">
    <label for="inputLivro4" class="form-label">Livro:</label>
    <input type="Livro" class="form-control" id="inputLivro6">
  </div>
  <div class="col-12">
    <label for="inputMensagem" class="form-label">Mensagem:</label>
  </div>

  <div  class="col-12">
  <textarea name="Mensagem" id=""></textarea>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Motivo do contato:</label>
    <select id="inputState" class="form-select">
      <option selected>Não recebi o livro</option>
      <option>aaaaaaaaaaa</option>
      <option>aaaaaaaaaaa</option>
      <option>aaaaaaaaaaa</option>
      <option>aaaaaaaaaaa</option>
      <option>aaaaaaaaaaa</option>
    </select>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
      </div>
    </div>
  </div>
  <div class="col-12">
    
    <button type="submit" class="botao">Enviar</button>
   
  </div>
  </div>
</form>


@endsection
