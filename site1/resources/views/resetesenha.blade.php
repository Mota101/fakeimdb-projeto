<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <section>
        <div>
        <h1 id="reset-text">Criar uma nova senha</h1>
        <h3 id="text">Nova senha</h3>
        </div>
        <div>
            <form action="login" method="get">
                <div class="input-reset">
                <span id="span-senha">SENHA </span>
                <input type="password" id="senha" name="senha" placeholder="*******">
                <span id="span-senha2">CONFIRMAÇÃO </span>
                <input type="password" id="senha2" name="senha" placeholder="*******">
                </div>
                <div id="btn-reset"> 
                    <button type="submit" id="reset-btn" onclick="valida_login()">ENVIAR</button>
                </div>
            </form>
            <img src="./img/login.png" align="left">
        </div>
    </section>
</body>
<script src="/js/camposvazios.js"></script>
<script src="jquery-3.6.0.min.js"></script>
</html>