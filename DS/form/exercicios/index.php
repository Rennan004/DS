<?php

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $concatenar = $nome . $sobrenome;
    $upper = strtoupper($concatenar);

    $email = $_POST['email'];
    $lower = strtolower($email);

    $a = "INSERT INTO (nome,sobrenome) VALUES('$nome','$sobrenome')";
   

    echo "Seu nome: $upper<br>
          Seu email: $lower
    ";

?>

