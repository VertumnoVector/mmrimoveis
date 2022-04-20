<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Corretor de imóveis em Cuiabá, Corretor cuiabá, Miguel Corretor, Empreendimentos imobiliários, aluguel em cuaiba, venda de casa em cuiaba, venda de apartamento em cuiaba, imobiliaria em cuiaba">
  <meta name="description" content="A MMR - Empreendimentos imobiliários atua em Cuiabá-MT com vendas e alugueis de imóveis residenciais. Ademir Miguel, especialista em venda e negociação de imóveis urbanos e rurais.,">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="revised" content="31/03/2022"/>
  <title>MMR - Emp. Imobiliários</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
  <script src='https://www.google.com/recaptcha/api.js?hl=pt-br'></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
       footer {
      position: bottom;
      height: auto;
      bottom: 0;
      width: 100%;
      padding: 0 10px 0 10px;
    }
    .p-shadow{
     text-shadow: 2px 2px #000000;
   }
    h1{
      margin-top: 3rem!important;
    }
    .miguel{
      width: 30px;
      height: 30px;
      vertical-align: middle !important;
   }
   .divider-menu{
    background-color: #fff;
   }
   .fundo{
        background-image: url("assets/img/bg.png");
        background-size: 200px 200px;
      }
</style>

<link href="assets/css/carousel.css" rel="stylesheet">
</head>
<body class="fundo">
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #0077B6;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <img src="assets/img/brand.png" alt="Logotipo" width="50" height="40" class="d-inline-block align-text-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Imóveis
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="alugar.html">Alugueis</a></li>
                <li><a class="dropdown-item" href="vendas.html">Vendas</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item disabled" href="#">Negociar</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <hr class="divider-menu">
          <form class=" d-flex justify-content-between">
            <img class="miguel mt-auto mb-auto  " src="assets/img/miguel.webp"><span class="text-white navbar-text"
              style="margin-right: 0.5rem">Plantão de vendas</span>
            <a href="#" class="btn btn-md btn-success" type="submit"><i class="material-icons"
                style="font-size:20px;vertical-align: middle;margin-right: 1rem;">whatsapp</i>Fala com Miguel</a>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/alugar/bannerAlguel.jpg">
          <div class="container">
            <div class="carousel-caption text-center">
              <a href='https://www.pngtree.com/so/filhote'><img src="assets/img/alugar/plate2.png" width="150"
                height="150" class="d-inline-block align-bottom" alt="Alguel"></a>
                <h1 class="mt-auto">Contato</h1>
                <p>Dúvidas, reclamações e sugestões. Sinta-se à vontade <i class="material-icons">favorite</i></p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
           <img src="assets/img/vendas/bannerVendas.jpg">
           <div class="container">
            <div class="carousel-caption text-center">
              <a href='https://www.pngtree.com/so/filhote'><img src="assets/img/alugar/plate2.png" width="150"
                height="150" class="d-inline-block align-bottom" alt="Alguel"></a>
                <h1 class="mt-auto">Contato</h1>
                <p>Dúvidas, reclamações e sugestões. Sinta-se à vontade <i class="material-icons">favorite</i></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container marketing" >
        <div class="row justify-content-md-center">
          <form method="POST" action="mailer/envia.php">
            <div class="mb-3">
              <label for="name" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" name="nome" id="name" required>
              <div id="name" class="form-text">Fica tranquilo, não enviamos spam.</div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Seu e-mail</label>
              <input type="email" class="form-control" name="email" id="email" style="max-width: 300px" required>
              <div id="email" class="form-text" >Fica tranquilo, não enviamos spam.</div>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Assunto</label>
              <input type="text" class="form-control" name="assunto" id="message" style="max-width: 300px"required>
            </div>  
            <div class="mb-3">
              <label for="message" class="form-label">Mensagem</label>
              <input type="text" class="form-control" name="msg" id="message" style="height:300px" required>
            </div>  
            <div class="g-recaptcha mb-3" data-sitekey="6LfIeuweAAAAAKHTN4bmwVAu6hvO4m_VzQYGOKT9"required></div>
            <input class="btn btn-primary" type="submit" >
            
          </form>

        </div>
      </div>
      <hr class="featurette-divider">
      <div class=" text-white p-5" style="width: 100%; background-color:#0077B6;">
        <footer class="d-flex justify-content-between align-items-center py-3">
          <div class="col-md-5 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <img src="assets/img/brand.png" style="width: 100px; height: 80px;">
            </a>
            <span class="text-white ">© 2022, MMR - Empreendimentos Imobiliários<br>Ademir Miguel - Corretor<br>CRECI: 0000000<br></span>
          </div>
          <ul class="nav col-md-4 justify-content-end list-unstyled ">
            <span>Siga</span>
            <li class="ms-3"><a class="text-white" href="#"><i class="bi-instagram" style="color:#fff"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi-facebook" style="color:#fff"></i></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><i class="bi-whatsapp" style="color:#fff"></i></a></li>
          </ul>
        </footer>
      </div>
      <div class="text-center text-white p-1" style="background-color: rgba(65, 105, 225, 1)">
        <img src="assets/img/assinatura.png" style="width: 60px; height: 30px;">
      </div>
    </div>
  </main>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 

</body>
</html>
