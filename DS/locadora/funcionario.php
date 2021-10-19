<?php
$local_serve = "localhost"; // local do servidor
$usuario_serve = "root"; // nome do usuario
$senha_serve = ""; // senha
$banco = "locadora"; // nome do banco de dados


    $conectar =  mysqli_connect($local_serve,$usuario_serve,$senha_serve,$banco) or die ("Não
    foi possivel conectar-se ao banco de dados!");
    
    if( isset($_POST['placa'])
    && isset($_POST['chassi'])&& isset($_POST['cor'])&& isset($_POST['marca'])
    && isset($_POST['modelo'])&& isset($_POST['fabricacao'])&& isset($_POST['quilometragem'])
    && isset($_POST['combustivel'])&& isset($_POST['tipo']))


    $placa = $_POST['placa'];
    $chassi = $_POST['chassi'];
    $cor = $_POST['cor'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $fabricacao = $_POST['fabricacao'];
    $quilometragem = $_POST['quilometragem'];
    $combusitvel = $_POST['combustivel'];
    $tipo = $_POST['tipo'];



    
    $sql = "INSERT INTO veiculo(placa,chassi,cor,marca,modelo,fabricacao,quilometragem,combustivel,tipo) VALUES('$placa','$chassi','$cor','$marca','$modelo','$fabricacao','$quilometragem','$combusitvel','$tipo')";
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
        <div class="box-3 p-3 text-white mt-4 rounded">
        <h1>Funcionario</h1>
        <form action="inserir_3.php"  method="post">
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">Nome</label>
              <input type="text" class="form-control " id="nome" name="nome" placeholder="Digite seu nome...">
            </div>
            <div class="form-group col-md-6">
              <label for="">CPF</label>
              <input type="text" class="form-control " id="cpf" name="cpf" placeholder="Digite seu CPF...">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group  col-md-6">
                <label for="">Rua</label>
                <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite sua rua...">
              </div>
              <div class="form-group  col-md-6">
                <label for="">Numero</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu numero de endereço...">
              </div>
            </div>


            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="DIgite seu bairro...">
              </div>
              <div class="form-group col-md-6">
                <label for="">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite seu CEP...">
              </div>
            </div>


            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">Cidade</label>
                <input type="text" class="form-control w-50" id="cidade" name="cidade" placeholder="Digite sua cidade...">
              </div>
              <div class="form-group col-md-6 mt-4">
               Estado <select id="estado" name="estado">
                <option value="">Acre</option>
                <option value="">Alagoas</option>
                <option value="">Amapá</option>
                <option value="">Amazonas</option>
                <option value="">Bahia</option>
                <option value="">Ceará</option>
                <option value="">Distrito Federal</option>
                <option value="">Espírito Santo</option>
                <option value="">Goiás</option>
                <option value="">Maranhão</option>
                <option value="">Mato Grosso</option>
                <option value="">Mato Grosso do Sul</option>
                <option value="">Minas Gerais</option>
                <option value="">Pará</option>
                <option value="">Paraíba</option>
                <option value="">Paraná</option>
                <option value="">Pernambuco</option>
                <option value="">Piauí</option>
                <option value="">Rio de Janeiro</option>
                <option value="">Rio Grande do Norte</option>
                <option value="">Rio Grande do Sul</option>
                <option value="">Rondônia</option>
                <option value="">Roraima</option>
                <option value="">Santa Catarina</option>
                <option value="">São Paulo</option>
                <option value="">Sergipe</option>
                <option value="">Tocantins</option>
              </select>
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="">Chapa</label>
                    <input type="text" class="form-control" id="chapa" name="chapa" placeholder="Digite sua chapa...">
                  </div>
              <div class="form-group col-md-6">
                <label for="">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email...">
              </div>
            </div>

      


            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a type="submit" class="btn btn-dark" href="veiculo.php">Voltar</a>
          </form>

        </div>
    </div>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>