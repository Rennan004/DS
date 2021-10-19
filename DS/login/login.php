<?php

$local_serve = "localhost";      // local do servidor
$usuario_serve = "root";         // nome do usuario
$senha_serve = "";                  // senha
$banco = "login";      // nome do banco de dados

$conn = mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não foi possivel conectar-se ao banco de dados!");

$usuario2 = $_POST['usuario1'];
$senha2 = md5($_POST['senha1']);

//busca no banco de dados um usuario e senha iguais aos que foram informados
$sqlbusca = "SELECT * FROM tb_user WHERE usuario = '$usuario2' AND senha = '$senha2'";

//executa o comando e lança o resultado na variavel dados
$dados = mysqli_query($conn, $sqlbusca) or die("Não foi possível buscar os dados");

//verifica se retornou algum registro do banco
if (mysqli_num_rows($dados)<=0){ //se o registro é menor ou igual a zero, significa que nao tem usuario e senha cadastrado
    echo "Usuario nao cadastrado ou dados invalidos";
}else{ //se tiver usuario e senha cadastrados efetua o login
    echo "Login efetuado com sucesso!!!!";
      
    if(isset($usuario2)){  // Verifica se a variavel foi criada ou iniciada
        session_start();  // Inicia a sessão
        $_SESSION['usuario'] = $usuario2; // Atribui para a variavel de seesão o nome do usuario autenticado
    }
    header("location:novo.php"); //Redireciona para a tela restrita



    // Aplicação do cookie

     /*  if(isset($usuario2)){ // Verifica se a variavel foi criada ou iniciada
           setcookie("usuario",$usuario2, time() + 60); // cria um cookie com tempo de vida de 1 minuto
    }
    $teste = $_COOKIE["usuario"];
    echo "Usuario: $teste";*/
    }

echo " <a href='login.html'>Voltar</a> ";

?>