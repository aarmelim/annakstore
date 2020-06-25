<!DOCTYPE html>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107251954-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments)
  };
  gtag('js', new Date());
  gtag('config', 'UA-107251954-1');
</script>

<?php require_once("conexao/conexao.php"); 

  if ( isset($_POST["enviar"]) ) {
     $email = $_POST["email"];
     $nome = utf8_decode($_POST["nome"]);
     $descricao = utf8_decode($_POST["descricao"]);
     
     $inserir  = "INSERT INTO email ";
     $inserir  .= "(email, nome, descricao) ";
     $inserir  .= "VALUES ";
     $inserir  .= "('$email', '$nome', '$descricao')";

     $retorno = array();
     $operacao_insercao = mysqli_query ($conecta, $inserir);

     if($operacao_insercao){
         $retorno["sucesso"] = true;
         $retorno["mensagem"] = "Obrigada pela mensagem. Em breve entrarei em contato.";
     } else {
         $retorno["sucesso"] = false;
         $retorno["mensagem"] = "Estamos com um problema para registrar sua mensagem e já estamos atuando para corrigí-lo. Favor tentar um pouco mais tarde !!";
     }
  }
?>

<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Anna K Store - Loja de roupas femininas">
  <meta name="author" content="Anna K Store">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <title>Anna K. Store</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.css" rel="stylesheet">

  <link href="css/personalizado.css" rel="stylesheet">

</head>

<body>

  <!-- Barra de navegacao -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Anna K. Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <header>
    <div class="overlay">
      <div class="container">
        <img src="img/fundo.jpg" width="100%" class="img-responsive" alt="Imagem Anna K Store - roupas femininas">
      </div>
    </div>
  </header>

  <div class="container">

    <div class="row">
      <div class="col-lg-4">

        <h4>Moda</h4>
        <p>Oferecemos trabalho de Consultoria de Moda e Imagem focando nas necessidades pessoais e formato visual. Criamos looks que se encaixam e atendam todas as necessidades e desejos das pessoas.</p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

        <h4>Estilo</h4>
        <p>Aqui na Anna K você encontra roupas lindas, cheias de estilo e qualidade e dicas de styling e beleza.</p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

        <h4>Comodidade</h4>
        <p>Roupas para mulheres de diferentes estilos. Compre sem sair de casa. Enviamos nossas pe?as para todo o Brasil e aceitamos Cart?o de Débito e Crédito. Acesse nossas novidades através das redes sociais.</p>

      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>

  <hr />

  <div class="container">

    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h3>Entre em contato</h3>
      </div>
    </div>
    <div id="formulario_email">
      <form action="index.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome (opcional)">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="descricao">Mensagem</label>
            <textarea class="form-control" name="descricao" id="descricao" placeholder="Deixe seus comentários (opcional)"></textarea>
          </div>
        </div>
        <?php
          if (isset($retorno['mensagem'])){
            echo "<div><p class='font-italic text-monospace'>" . $retorno['mensagem'] . "</p></div>";  
          }
        ?>
        <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>

      </form>
    </div>
</div>

<hr />
<!-- Footer -->
      <footer class="py-3 bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4" id="icone-wa">
              <a target="_blank" href="https://api.whatsapp.com/send?phone=5511984022526&text=Ola, gostaria de informações sobre algumas peças">
                <img class="img-fluid rounded" src="img/wa_icone.png" width=25em alt="telefone whats app 11-98402.2526">
              </a> 
              <a target="_blank" class="m-0 text-center text-white" href="https://api.whatsapp.com/send?phone=5511984022526&text=Ola">
                11-98402.2526
              </a>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4" id="icone-rede-social">
              <a href="http://www.instagram.com/anna_k_store">
                <img class="img-fluid rounded" src="img/instagram.ico" width=30em alt="instragram @anna_k_store">
              </a>
              <a href="http://www.facebook.com/annakstore">
                <img class="img-fluid rounded" src="img/fb.ico" width=25em alt="facebook.com/annakstore">
              </a>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <a target="_blank" class="text-white" href="mailto:storeannak@gmail.com">
                storeannak@gmail.com
              </a>
            </div>
          </div>
        </div>
        <!-- /.container -->
      </footer>

      <!-- Bootstrap core JavaScript -->
      <script src="js/jquery/jquery.min.js"></script>
      <script src="js/popper/popper.min.js"></script>
      <script src="js/bootstrap/bootstrap.min.js"></script>

</body>

</html>