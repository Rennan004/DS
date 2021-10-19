<?php 

$local_serve = "localhost"; // local do servidor
$usuario_serve = "root"; // nome do usuario
$senha_serve = ""; // senha
$banco = "formulario"; // nome do banco de dados

$conectar = mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die
("Não foi possivel conectar-se ao banco de dados!");

$sql = "SELECT * FROM form";
$limite = mysqli_query($conectar, $sql);//verifica o limite da tabela


while ($sql = mysqli_fetch_array($limite)){
 

        $nome = $sql["nome"];
        $email = $sql["email"];
        $nascimento = $sql["nascimento"];
        $filhos = $sql["filhos"];
        $site = $sql["site"];
        $salario = $sql["salario"];

    
   echo "
   <br>
   Nome: $nome <br>
         Email: $email <br>
         Data de nascimento: $nascimento <br>
         Qtde filhos: $filhos <br>
         Site: $site <br>
         Salario: $salario";
echo "<br>";
}
echo "<a href='formulario.php'>Voltar</a>";

?>