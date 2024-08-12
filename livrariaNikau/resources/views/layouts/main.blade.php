<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonte do google  -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!--Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>

 <title> @yield('title') </title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbar">
            <a href="" class="navbar-brand">
                <img src="/img/Nikauwhite.png" alt="">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/galeria" class="nav-link">Livros</a>
                </li>

                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Meu Carrinho</a>
                </li> 

          <form action="/logout" method="POST">

                    <a href="/logout" class="nav-link"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Sair
                </a>
                </form>

                <li class="nav-item">
                    <a href="/login" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar</a>
                </li>

            </ul>
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
        <footer>
                <p>Livros Nikau &copy; 2024</p>
        </footer>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>
