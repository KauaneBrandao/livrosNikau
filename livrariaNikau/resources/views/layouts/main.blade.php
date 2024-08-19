<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonte do google  -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/styles.css">
    <script src="/js/scripts.js"></script>

    <!--icones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


 <title> @yield('title') </title>

</head>

<body>
        <div class="primeiro">
            <div class="nikau">
                <h1 class="titleNav">Nikau Books.</h1>
                <div class="icone"><i class="material-icons">favorite_border</i></div>
                <div class="icone"><i class="material-icons">person_pin</i></div>
            </div>
            <div class="iconess">
              
            </div>
        </div>

        <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../welcome">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contato">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Minha Conta</a>
        </li>
        </div>

        <div class="search">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit">  <i class="material-icons">search</i>
        </button>
      </form>
      </div>
    
  </div>
</nav>

    </header>


        <main>
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </main>
        
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h2 class="white-text">Nikau Books.</h2>
                <p class="grey-text text-lighten-4">Conectando você ao mundo dos livros com paixão e conhecimento. <br> Explore nosso acervo diversificado, encontre suas próximas leituras <br>e mergulhe em novas aventuras literárias. </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <div class="links">
                <h2 class="white-text">Links</h2>
                <ul style="list-style: none;">
                  <li><a class="grey-text text-lighten-3" href="#!">Fale Conosco</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Trabalhe Conosco</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Sobre Nós</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Privacidade</a></li>
                </ul>
                </div>
              </div> 
              <div class="col l6 s12">
                <h2 class="white-text">Acompanhe a gente!</h2>
                <ul style="list-style: none;">
                    <li class="iconess1"> <img src="../img/insta.png" alt="">ㅤ@NikauBooks</li>
                    <li class="iconess"><img src="../img/fb.png" alt="">  ㅤ Nikau Livraria</li>
                    <li class="iconess1"><img src="../img/twitter.png" alt="">ㅤ@BooksNikau</li>
                    <li class="iconess"><img src="../img/email.png" alt=""> ㅤ NikauBooks@gmail.com</li>
                </ul>
              </div>

            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © Nikau Copyright 2024
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
