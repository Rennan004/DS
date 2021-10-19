<?php
$local_serve = "localhost"; // local do servidor
$usuario_serve = "root"; // nome do usuario
$senha_serve = ""; // senha
$banco = "locadora"; // nome do banco de dados


    $conectar =  mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não
    foi possivel conectar-se ao banco de dados!");
    


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $rua = $_POST['rua'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $chapa = $_POST['chapa'];



 

    $sql = "INSERT INTO funcionario(nome,email,cpf,rua,endereco,bairro,cep,cidade,estado,chapa) VALUES('$nome','$email','$cpf','$rua','$endereco','$bairro','$cep','$cidade','$estado','$chapa')";
    mysqli_query($conectar, $sql) or die("Não foi possível inserir os dados");
  
?>