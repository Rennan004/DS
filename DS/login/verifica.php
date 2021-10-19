<?php
    if(session_status() == PHP_SESSION_NONE){  // Se não existir a sessão ela será iniciada
        session_start();
    }
    if(empty($_SESSION['usuario'])){ // Se a variavel sessão estiver vazia ela não entra e volta para tela de login
        header('Location:login.html');
    }
?>

