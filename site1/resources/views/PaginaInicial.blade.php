<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/pgi.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Pagina Inicial</title>
</head>
<body>
    <nav id="menu">
        <ul>
        </div></li>
            <img src="./img/log.png" align="left">
            <li><a href="">Quem somos?</a></li>
            <li><div class="dropdown">
            <a href="" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="perfil" src="/img/perfil2.png" alt=""> Perfil</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">Sair</button>
            </div>
            </div></li>
        </ul>
    </nav>
    <hr>
    <form action="" id="form">
    <div class="form-control">
        <input type="text" class="pesquisa-bar" id="pesquisa">
        <img class="lupa" src="/img/lupa.png" alt="">
    </div>
    </form>
    <div class="container">
        <div id="filmes" class="row"></div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="/js/movies-data.js"></script>
<script>
    popularMovies();
</script>
</html>