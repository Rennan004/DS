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
        <div class="box p-3 mt-5 rounded">
        <h1>Cliente</h1>
        <form action="veiculo.php" method="post">
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">Nome</label>
              <input type="text" class="form-control " id="nome" name="nome" placeholder="Digite seu nome...">
            </div>
            <div class="form-group col-md-6">
              <label for="">Senha</label>
              <input type="password" class="form-control " id="senha" name="senha" placeholder="Senha...">
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
                <label for="">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email...">
              </div>
              <div class="form-group col-md-6">
              <label for="">CPF</label>
              <input type="text" class="form-control " id="cpf" name="cpf" placeholder="Digite seu CPF...">
            </div>
            </div>

            <button type="submit" class="btn btn-primary" href="#">Inserir</button>
          </form>

        </div>
    </div>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>