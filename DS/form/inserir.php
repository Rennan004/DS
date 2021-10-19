<?php
$local_serve = "localhost"; // local do servidor
$usuario_serve = "root"; // nome do usuario
$senha_serve = ""; // senha
$banco = "formulario"; // nome do banco de dados


    $conectar =  mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não
    foi possivel conectar-se ao banco de dados!");
    
    if(  isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['nascimento']) && 
    isset($_POST['filhos']) && isset($_POST['site']) && isset($_POST['salario']))

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nascimento = $_POST['nascimento'];
    $filhos = $_POST['filhos'];
    $site = $_POST['site'];
    $salario = $_POST['salario'];

    $nome_maiusculo = strtoupper($nome);

    $sql = "INSERT INTO form(nome,email,nascimento,filhos,site,salario) VALUES('$nome','$email','$nascimento','$filhos','$salario','$site')";
    mysqli_query($conectar, $sql) or die("Não foi possível inserir os dados");

    echo"Inseridos na Tabela DADOS <br />Usuario: $nome_maiusculo <br />Email: $email <br />Nascimento: $nascimento <br />Qtde filhos: $filhos <br />Site: $site <br />Salario: $salario";
    echo "<br>";

    echo" <a href='formulario.php'>Voltar</a> ";
?>