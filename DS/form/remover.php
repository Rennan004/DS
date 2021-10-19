<?php
$local_serve = "localhost"; // local do servidor
$usuario_serve = "root"; // nome do usuario
$senha_serve = ""; // senha
$banco = "formulario"; // nome do banco de dados

$conectar = mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não
foi possivel conectar-se ao banco de dados!");

/*"pega" os dados digitados no form, através do método POST.*/

$nome = $_POST['nome'];
if ($nome == ''){
$message = "Preencha o nome que deseja remover";

echo "<script type='text/javascript'>alert('$message');</script>";
echo "<a href='formulario.php'>Voltar</a>";
}

else if ($nome <> ''){
$sqldelete = "DELETE FROM form WHERE nome='$nome'";


mysqli_query($conectar, $sqldelete) or die("Não foi possível remover o Registro");
echo"Removeu da Tabela Nome: $nome";
echo "<br>";
echo "<a href='formulario.php'>Voltar</a>";
}
?>