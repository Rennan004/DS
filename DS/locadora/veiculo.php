<?php
$local_serve = "localhost"; // local do servidor
$usuario_serve = "root"; // nome do usuario
$senha_serve = ""; // senha
$banco = "locadora"; // nome do banco de dados


    $conectar =  mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não
    foi possivel conectar-se ao banco de dados!");
  

    $nome = $_POST['nome'];
    $senha = MD5($_POST['senha']);
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $rua = $_POST['rua'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
  


    $sql = "INSERT INTO cliente(nome,email,cpf,rua,endereco,bairro,cep,cidade,estado,senha) VALUES('$nome','$email','$cpf','$rua','$endereco','$bairro','$cep','$cidade','$estado','$senha')";
    mysqli_query($conectar, $sql) or die("Não foi possível inserir os dados");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="box-2 p-3 mt-5 rounded">
        <h1>Veiculo</h1>
        <form action="funcionario.php"  method="post">
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">Placa</label>
              <input type="text" class="form-control " id="placa" name="placa" placeholder="Digite a placa...">
            </div>
            <div class="form-group col-md-6">
              <label for="">Chassi</label>
              <input type="text" class="form-control " id="chassi" name="chassi" placeholder="Digite o chassi...">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group  col-md-6">
                <label for="">Cor</label>
                <input type="text" class="form-control" id="cor" name="cor" placeholder="Digite a cor...">
              </div>
              <div class="form-group  col-md-6 mt-4">
                Marca  <select id="marca" name="marca">
                    <option value="">Toyota</option>
                    <option value="">Volkswagen</option>
                    <option value="">Ford</option>
                    <option value="">Honda</option>
                    <option value="">Hyundai</option>
                    <option value="">Nissan</option>
                    <option value="">Chevrolet</option>
                  </select>
              </div>
            </div>


            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">Medelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="DIgite qual e o modelo...">
              </div>
              <div class="form-group col-md-6 mt-4">
                Ano de fabricação <select id="fabricacao" name="fabricacao">
                 <option value="">2021</option>
                 <option value="">2020</option>
                 <option value="">2019</option>
                 <option value="">2018</option>
                 <option value="">2017</option>
                 <option value="">2016</option>
                 <option value="">2015</option>
               </select>
             </div>
             </div>


            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">Quilometragem</label>
                <input type="text" class="form-control " id="quilometragem" name="quilometragem" placeholder="Digite a quilometragem...">
              </div>
              <div class="form-group col-md-6">
                <label for="">Combustivel</label>
                <input type="text" class="form-control" id="combustivel" name="combustivel" placeholder="Digite o tipo de combustivel...">
              </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-12">
                <label for="">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Digite o tipo de veiculo...">
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Inserir</button>
            <a type="submit" class="btn btn-primary" href="funcionario.php">Proximo</a>
            <a type="submit" class="btn btn-dark" href="cliente.php">Voltar</a>
          </form>

        </div>
    </div>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>