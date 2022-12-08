<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
<div>
<nav>
    <div class="menu">
    <h1>...</h1>
    </div>
    <hr>
</nav>
<section>
    <h1 id="cadastro-text">Create new Account</h1>
    <a href="login" ><h3 id="link-voltar">Already Registered? Log in here.</h3></a>
    </div>
    <div>
        <form action="login" method="">
            <div class="input-cadastro">
            <span id="name-cadastro">NAME</span>
            <input type="text" name="nome-cadastro" id="nome-cadastro" placeholder="Jiara Martins">
            <span id="span-email-cadastro">EMAIL</span>
            <input type="email" id="email-cadastro" name="email" placeholder="hello@reallygreatsite.com">
            <span id="span-senha-cadastro">PASSWORD</span>
            <input type="password" id="senha-cadastro" name="senha" placeholder="*******">
            </div>
            <div id="btn-cadastro"> 
                <button type="submit" id="cadastro-btn" onclick="valida_cadastro()">sign in</button>
            </div>
        </form>
    </div>
</section>
</body>
<!-- <script src="/js/camposvazios.js"></script> -->
<script src="jquery-3.6.0.min.js"></script>
</html>