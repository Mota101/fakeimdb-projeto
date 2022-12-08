function valida_login(){
    if(document.getElementById("email").value.length <= "" && document.getElementById("senha").value.length <= ""){
        alert('Por favor, preencha os dois campos');
        document.getElementById("email").focus();
        document.getElementById("senha").focus();
        event.preventDefault();
    }else if(document.getElementById("email").value.length <= ""){
        alert('Por favor, preencha o campo email');
        document.getElementById("email").focus();
        event.preventDefault();
    }else if(document.getElementById("senha").value.length <= ""){
        alert('Por favor, preencha o campo senha');
        document.getElementById("senha").focus();
        event.preventDefault();
    }
    }

function valida_cadastro(){
    if(document.getElementById("nome-cadastro").value.length <= "" && document.getElementById("email-cadastro").value.length <= "" && document.getElementById("senha-cadastro").value.length <= ""){
        alert('Por favor, preencha os três campos');
        document.getElementById("nome-cadastro").focus();
        document.getElementById("email-cadastro").focus();
        document.getElementById("senha-cadastro").focus();
        event.preventDefault();
    }else if(document.getElementById("nome-cadastro").value.length <= "" && document.getElementById("email-cadastro").value.length <= ""){
        alert('Por favor, preencha o campo nome e o campo email');
        document.getElementById("nome-cadastro").focus();
        document.getElementById("email-cadastro").focus();
        event.preventDefault();
    }else if(document.getElementById("nome-cadastro").value.length <= "" && document.getElementById("senha-cadastro").value.length <= ""){
        alert('Por favor, preencha o campo email e o campo senha');
        document.getElementById("nome-cadastro").focus();
        document.getElementById("senha-cadastro").focus();
        event.preventDefault();
    }else if(document.getElementById("email-cadastro").value.length <= "" && document.getElementById("senha-cadastro").value.length <= ""){
        alert('Por favor, preencha o campo email e o campo senha');
        document.getElementById("email-cadastro").focus();
        document.getElementById("senha-cadastro").focus();
        event.preventDefault();
    }else if(document.getElementById("nome-cadastro").value.length <= ""){
        alert('Por favor, preencha o campo nome');
        document.getElementById("nome-cadastro").focus();
        event.preventDefault();
    }else if(document.getElementById("email-cadastro").value.length <= ""){
        alert('Por favor, preencha o campo email');
        document.getElementById("email-cadastro").focus();
        event.preventDefault();
    }else if(document.getElementById("senha-cadastro").value.length <= ""){
        alert('Por favor, preencha o campo senha');
        document.getElementById("senha-cadastro").focus();
        event.preventDefault();
    }
    }