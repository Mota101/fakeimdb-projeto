<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/PG.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section class="logo">
    <img class="claquete" src="/img/claquete.png" alt="">
    <span class="text">Pirata <br> Plus <img class="cruz" src="/img/cruz2.png" alt=""></span>
    </section>

    <section class="info">   
    <div class="m"></div> 
    <img class="claquete1" src="/img/claquete.png" alt="">
    <p class="text1">Pirata <br> Plus <img class="cruz1" src="/img/cruz2.png" alt=""></p>
    </div>

    <div class="">
    <p class="text2">Com o <br> <span class="color">Pirata </span> <br> você vai <br> longe</p>
    </div>

    <button class="btn-info" onclick="login()">Saiba mais</button>

    <div>
    <p class="text3">Descubra <br><br> Avalie <br><br> Compartilhe</p>
    </div>
    </section>
</body>
<script>
    function login(){
        window.location.href = "http://127.0.0.1:8000/login";
    }
</script>
</html>