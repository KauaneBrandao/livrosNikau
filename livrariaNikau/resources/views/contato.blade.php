@extends('layouts.main')

@section('title','Livros Nikau')

@section('content')

<link rel="stylesheet" href="{{ asset ('css/login.css') }}">

<form class="row g-3" #>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Nome:</label>
    <input type="Nome" class="form-control" id="inputNome6">
  </div>
  <div class="col-md-12">
    <label for="inputLivro4" class="form-label">Livro:</label>
    <input type="Livro" class="form-control" id="inputLivro6">
  </div>
  <div class="col-12">
    <label for="inputMensagem" class="form-label">Mensagem:</label>
    <input type="text" class="form-control" id="inputMensagem" placeholder="1234 Main St">
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
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
@endsection
