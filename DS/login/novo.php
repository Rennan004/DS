<?php include "verifica.php" ?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Novo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/estilo.css">
     <link rel="stylesheet" href="libs/fontawesome/css/all.css">
     <link rel="stylesheet" href="style.css">
  </head>
  <body>
 <div class="jumbotron jumbotron-fluid bg-rennan">
    <div class="container">
        <div class="row justify-content-center mt-n4">
            <div class="col-3 col-sm-2 col-md-1">
                <img class="img-fluid" src="img/eclipse.png" alt="">
            </div>
            <div class="col-9 col-sm-10 col-md-11">
                <h1 class="text-right  mt-3 personal-family d-none d-sm-block">
                    Rennan Guilherme - Desenvolvedor Web
                </h1>
                <h4 class="text-right  mt-3 personal-family d-block d-sm-none d-md-none">
                    Rennan Guilherme 
                </h4>
            </div>
        </div>
    
        <div id="content"  class="row justify-content-center mt-5">
            <div class="col-6 col-sm-4 col-md-2 mt-5 mt-sm-4 mt-md-0 ">
                <a href="sobre">
                    <img class="img-fluid" src="img/info.png" alt="">
                    <h5 class="text-center text-right ">Sobre</h5>
                </a>
            </div>
            <div class="col-6  offset-col-sm-1 col-md-2 offset-md-1 col-md-2  mt-5 mt-sm-4 mt-md-0 ">
                <a href="projetos">
                    <img class="img-fluid" src="img/tools.png" alt="">
                    <h5 class="text-center text-right ">Projetos</h5>
                </a>
            </div>
            <div class="col-6  offset-col-sm-1 col-sm-4  offset-md-1 col-md-2  mt-5 mt-sm-4 mt-md-0 ">
                <a href="clientes">
                    <img class="img-fluid" src="img/clerk-with-tie.png" alt="">
                    <h5 class="text-center text-right ">Clientes</h5>
                </a>
            </div>
            <div class="col-6  offset-col-sm-1 col-sm-4  offset-md-1 col-md-2  mt-5 mt-sm-4 mt-md-0 ">
                <a href="contatos">
                    <img class="img-fluid" src="img/call.png" alt="">
                    <h5 class="text-center text-right ">Contatos</h5>
                </a>
            </div>

              <div class="row">
            <div class="col-12 text-center" id="alinhamento">
            <button class="btn btn-primary">ORIGINAL</button>
              <button class="btn btn-light">LIGHT</button>
              <button class="btn btn-dark">DARK</button>
            </div>
            </div>
            <form method="POST" action="logout.php">
                    <input type="submit" name="botao2" value="SAIR" class="ml-5 btn btn-danger">
                </form>
            </div>
            
        </div>
        <div class="container-fluid border-top fixed-bottom">
            <div class="row">
                <div class="col-12">
                    <p class="text-center">
                        Todos os direitos reservados. <br> Rennan Guilherme Dos Santos lima
                    </p>
                </div>
            </div>
        </div>  
    </div>

 </div>

    <!-- Janela Modal -->

    <div class="modal fade" id="modal-info" role="dialog" aria-labelledby="information" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Título da nossa Modal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi quidem asperiores ipsa neque tenetur libero facere, corporis et magni pariatur dignissimos obcaecati voluptate consequuntur ipsam provident dolor odio doloribus quaerat.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/load-page.js"></script> 
    <script src="js/tema.js"></script> 
    <script src="js/script.js"></script> 
</body>