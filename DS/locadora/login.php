<?php
$local_serve = "localhost"; // local do servidor
$usuario_serve = "root"; // nome do usuario
$senha_serve = ""; // senha
$banco = "locadora"; // nome do banco de dados


    $conectar =  mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não
    foi possivel conectar-se ao banco de dados!");
    
 


    $nome = $_POST['nome'];
    $senha = MD5($_POST['senha']);
    
    $sqlbusca = "SELECT * FROM cliente WHERE cliente = '$nome' AND senha = '$senha'";
     
    
     $dados = mysqli_query($conectar, $sqlbusca) or die("Não foi possivel buscar os dados"); 

    if(mysqli_num_rows($dados)<=0){
        echo "Usuario não cadastrado";
    }
    else{
        echo "Login efetuado com sucesso";
    }
?>