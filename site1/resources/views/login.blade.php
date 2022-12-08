<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div>
        <h1 id="login-text">Login</h1> <br>
        <h3 id="text">Entre para continuar</h3> <br>
        </div>
        <div>
            <form action="PaginaInicial" method="get">
                <div class="input-login">
                <span id="span-email">EMAIL</span>
                <input type="email" id="email" name="email" placeholder="hello@reallygreatsite.com">
                <span id="span-senha">SENHA</span>
                <input type="password" id="senha" name="senha" placeholder="*******">
                </div>
                <div id="btn-nu">
                <button type="submit" id="forgot-btn" formaction="confirmemail">ESQUECEU SENHA?</button>
                <button type="submit" id="creat-btn" formaction="cadastro">CRIAR UMA NOVA CONTA</button>
                </div>
                <div id="btn-login"> 
                    <button type="submit" id="login-btn" onclick="valida_login()">ENTRAR</button>
                </div>
            </form>
        </div>
            <img src="./img/login.png" align="left">
    </div>
</body>
<!-- <script src="/js/camposvazios.js"></script> -->
<script src="jquery-3.6.0.min.js"></script>
</html>