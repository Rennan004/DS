<?php 

$local_serve = "localhost"; // local do servidor
$usuario_serve = "root"; // nome do usuario
$senha_serve = ""; // senha
$banco = "aluno"; // nome do banco de dados

$conectar = mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die
("Não foi possivel conectar-se ao banco de dados!");

$sql = "SELECT * FROM alunos";
$limite = mysqli_query($conectar, $sql);//verifica o limite da tabela

while ($sql = mysqli_fetch_array($limite)){
    $codigo = $sql["codigo"];
    $nome = $sql["nome"];
    $rg = $sql["rg"];
   $telefone = $sql["telefone"];


    echo "Registro: $codigo <br />
    Nome: $nome<br />
    RG: $rg<br />
    Telefone: $telefone<br />";
echo "<br>";
}
echo "<a href='formulario.html'>Voltar</a>";

?>