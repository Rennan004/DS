<?php
$local_serve = "localhost"; // local do servidor
$usuario_serve = "root"; // nome do usuario
$senha_serve = ""; // senha
$banco = "login"; // nome do banco de dados


    $conectar =  mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não
    foi possivel conectar-se ao banco de dados!");
    
 


    $usuario = $_POST['usuario'];
    $senha = MD5($_POST['senha']);
   
    $sqlbusca = "SELECT * FROM usuario WHERE usuario = '$usuario'";
     
    
    $dados = mysqli_query($conectar, $sqlbusca) or die("Não foi possivel buscar os dados"); 

   if($usuario == "" || $usuario == null){
    echo "O campo não pode estar vazio!";
}

else if (mysqli_num_rows($dados)>0){
    echo "Usuario já existente";
}

else if(mysqli_num_rows($dados)<0){
    $usuario = $_POST['usuario'];
     $sql = "INSERT INTO usuario(usuario,senha) VALUES('$usuario','$senha')";
    mysqli_query($conectar, $sql) or die("Não foi possível inserir os dados");


    echo "Usuario inserido com sucesso!!!";
}
    echo "<br>";
    echo "<a href='Cadastrar.html'>Voltar</a>";
?>