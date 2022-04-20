<?php
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $foto1 = $_POST['foto1'];
    $foto2 = $_POST['foto2'];
    $foto3 = $_POST['foto3'];
    $foto4 = $_POST['foto4'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords"
    content="Corretor de imóveis em Cuiabá, Corretor cuiabá, Miguel Corretor, Empreendimentos imobiliários, aluguel em cuaiba, venda de casa em cuiaba, venda de apartamento em cuiaba, imobiliaria em cuiaba">
  <meta name="description"
    content="A MMR - Empreendimentos imobiliários atua em Cuiabá-MT com vendas e alugueis de imóveis residenciais. Ademir Miguel, especialista em venda e negociação de imóveis urbanos e rurais.,">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="revised" content="31/03/2022" />
  <title>MMR - Emp. Imobiliários</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/detalhes.css" rel="stylesheet">
  <link href="assets/css/carousel.css" rel="stylesheet">
</head>

<body class="fundo">
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #0077B6;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <img src="assets/img/brand.png" alt="Logotipo" width="50" height="40"
          class="d-inline-block align-text-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Imóveis
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="alugar.html">Alugueis</a></li>
                <li><a class="dropdown-item" href="vendas.html">Vendas</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item disabled" href="#">Negociar</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <hr class="divider-menu">
          <form class=" d-flex justify-content-between">
            <img class="miguel mt-auto mb-auto  " src="assets/img/miguel.webp"><span
              class="text-white navbar-text" style="margin-right: 0.5rem">Plantão de vendas</span>
            <a href="https://api.whatsapp.com/send?phone=65984464856&text=Ol%C3%A1,%20Miguel!"
              class="btn btn-md btn-success" type="submit"><i class="material-icons"
                style="font-size:20px;vertical-align: middle;margin-right: 1rem;">whatsapp</i>Fala com Miguel</a>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <hr class="margin-bar">
    <div class="container marketing">
      <div class="row">
        <div class="col-sm-6 col-lg-6 col-md-6 text-left">
          <div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner" style="border-radius: 25px;">
              <div class="carousel-item active">
                <a href=<?php echo $foto1 ?> target="_blank">
                  <img src=<?php echo $foto1 ?> class="d-block w-100" alt="...">
                </a>
              </div>
              <div class="carousel-item">
                <a href=<?php echo $foto2 ?> target="_blank">
                  <img src=<?php echo $foto2 ?> class="d-block w-100" alt="...">
                </a>
              </div>
              <div class="carousel-item">
                <a href=<?php echo $foto3 ?> target="_blank">
                  <img src=<?php echo $foto3 ?> class="d-block w-100" alt="...">
                </a>
              </div>
              <div class="carousel-item">
                <a href=<?php echo $foto4 ?> target="_blank">
                  <img src=<?php echo $foto4 ?> class="d-block w-100" alt="...">
                </a>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            <p class="text-center">Clique na imagem para expandir</p>
          </div><br>
          <div class="row justify-content-center" style="color: #3399ff;">
            <div class="col-6 col-sm-6">
              <p class="card-text"><i class="material-icons" style="font-size:20px;vertical-align: middle;">night_shelter</i> 2 Quartos / 1 Suíte.<br>
                <i class="material-icons" style="font-size:20px;vertical-align: middle;">directions_car</i> 5 vagas<br>
                <i class="material-icons" style="font-size:20px;vertical-align: middle;">straighten</i> 374m² terreno
              </p>
            </div>
            <div class="col-6 col-sm-6">
              <p class="card-text">
                <i class="material-icons" style="font-size:20px;vertical-align: middle;">wc</i> 1 banheiro social.<br>
                <i class="material-icons" style="font-size:20px;vertical-align: middle;">outdoor_grill</i> Espaço Gourmet e churrasqueira<br>
                <i class="material-icons" style="font-size:20px;vertical-align: middle;">videocam</i> Circuito de câmera
              </p>
              <hr class="margin-bar">
            </div>
          </div>
        </div>
        <div class="col-md text-center">
          <div class="col-12 col-sm-12" style="background-color:#3399ff;border-radius: 5px">
            <p class=" text-white text-center fs-1 " style="font-weight: bold;padding-top:1.5rem;"><?php echo $valor.'*' ?></p>
            <p class=" text-white text-center fs-6" style="font-style:italic;">*Consulte condições</p>
          </div>
          <div class="col-12 col-sm-12">
            <h1 class="text-end"><?php echo $titulo ?></h1>
          </div>
          <div class="col-12 col-sm-12">
            <p class="text-end"><?php echo $descricao ?></p>
            <hr>
            <a href="https://api.whatsapp.com/send?phone=5565984464856&text=Ol%C3%A1,%20Gostei%20muito%20desta%20casa.%20Queria%20saber%20mais%20sobre%20ela%20http://mmrimoveis.com.br" class="btn btn-lg btn-primary"><i class="bi-whatsapp" style="color:#fff"></i> Tenho interesse!</a>
          </div>
        </div>

      </div>
    </div>
    <hr class="margin-bar">
    <div class=" text-white p-5 " style="width: 100%; background-color:#0077B6;">
      <footer class="d-flex justify-content-between align-items-center py-3">
        <div class="col-md-5 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img src="assets/img/brand.png" style="width: 100px; height: 80px;">
          </a>
          <span class="text-white ">© 2022, MMR - Empreendimentos Imobiliários<br>Ademir Miguel - Corretor<br>CRECI:
            0000000<br></span>
        </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled ">
          <span>Siga</span>
          <li class="ms-3"><a class="text-white" href="#"><i class="bi-instagram" style="color:#fff"></i></a></li>
          <li class="ms-3"><a class="text-muted" href="https://web.facebook.com/MMR-Empreendimentos-Imobili%C3%A1rios-110134208306956/"><i class="bi-facebook" style="color:#fff"></i></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><i class="bi-whatsapp" style="color:#fff"></i></a></li>
        </ul>
      </footer>
    </div>
    <div class="text-center text-white p-1 " style="background-color: rgba(65, 105, 225, 1)">
      <img src="assets/img/assinatura.png" style="width: 60px; height: 30px;">
    </div>
    </div>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>