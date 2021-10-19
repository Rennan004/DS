<?php 
$local_serve = "localhost"; // local do servidor
$usuario_serve = "root"; // nome do usuario
$senha_serve = ""; // senha
$banco = "aluno"; // nome do banco de dados

$conectar = mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não
foi possivel conectar-se ao banco de dados!");


    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO alunos(nome,rg,telefone) VALUES('$nome','$rg','$telefone')";
    mysqli_query($conectar, $sql) or die("Não foi possível inserir os dados");
    
    echo"Inseridos na Tabela DADOS <br />Nome: $nome <br />RG: $rg <br /> Telefone:
    $telefone";
    echo "<br>";

    echo" <a href='formulario.html'>Voltar</a> ";
  
?>