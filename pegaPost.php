<?php

echo 'pegaPost';

//verifica se o post existe
if($_POST) {

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    //verifica o login e a senha
    if($login === 'admin' && $senha === '123123') {

        //cria session
        $_SESSION['login'] = $login;

        //redireciona a pagina
        header('Location: exibePagina.php');        
    }
    else {

        echo 'Senha errada';

    }   

}
