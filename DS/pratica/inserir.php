<?php
$local_serve = "localhost"; // local do servidor
$usuario_serve = "root"; // nome do usuario
$senha_serve = ""; // senha
$banco = "banco"; // nome do banco de dados


    $conectar =  mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não
    foi possivel conectar-se ao banco de dados!");
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO entrar(usuario,senha) VALUES('$usuario','$senha')";
    mysqli_query($conectar, $sql) or die("Não foi possível inserir os dados");

    echo"Inseridos na Tabela DADOS <br />Usuario: $usuario <br />Senha: $senha";
    echo "<br>";

    echo" <a href='pratica.html'>Voltar</a> ";
?>