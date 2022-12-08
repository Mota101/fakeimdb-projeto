<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;700&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
<div class="container">
    <h1 id="cadastro-text">Crie uma nova conta</h1>
    <a href="login" ><h3 id="link-voltar">Já está registrado? Entre aqui</h3></a>
    <div>
        <form action="login" method="">
            <div class="input-cadastro">
            <span id="name-cadastro">NOME</span>
            <input type="text" name="nome-cadastro" id="nome-cadastro" placeholder="Jiara Martins">
            <span id="span-email-cadastro">EMAIL</span>
            <input type="email" id="email-cadastro" name="email" placeholder="hello@reallygreatsite.com">
            <span id="span-senha-cadastro">SENHA</span>
            <input type="password" id="senha-cadastro" name="senha" placeholder="*******">
            </div>
            <div id="btn-cadastro"> 
                <button type="submit" id="cadastro-btn" onclick="valida_cadastro()">CADASTRAR</button>
            </div>
        </form>
    </div>
    <img src="./img/login.png" align="left">
</div>
</body>
<!-- <script src="/js/camposvazios.js"></script> -->
<script src="jquery-3.6.0.min.js"></script>
</html>