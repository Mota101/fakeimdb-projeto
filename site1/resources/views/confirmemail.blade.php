<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/confirmemail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;700&display=swap" rel="stylesheet">
    <title>Confirmação de Email</title>
</head>
<body>
    <section>
        <div>
        <h1 id="confirm-text">Esqueceu sua senha?</h1>
        <h3 id="text">Nova senha</h3>
        </div>
        <form action="resetesenha" method="get">
            <div class="input-confirm">
            <span id="span-email">EMAIL</span>
            <input type="email" id="email" name="email" placeholder="hello@reallygreatsite.com">
            </div>
            <div id="btn-confirm"> 
                    <button type="submit" id="confirm-btn" onclick="valida_login()">ENVIAR</button>
            </div>
        </form>
        <img src="./img/login.png" align="left">
    </section>
</body>
<!-- <script src="/js/camposvazios.js"></script> -->
<script src="jquery-3.6.0.min.js"></script>
</html>