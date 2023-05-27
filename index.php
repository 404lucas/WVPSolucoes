<?php include 'config.php';

include './classes/mailer.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCzPEOaPGLmDGRwBW4P584sYpL0nW6n_L4"></script>
  <script src="./js/map.js"></script>
  <script src="https://kit.fontawesome.com/9e0a3da5bd.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./style/estilo.css">
  <link rel="stylesheet" href="./style/bootstrap/css/bootstrap.min.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WVPSolucoes</title>
  <script></script>
</head>

<body>
  <header>
    <div id="logo">
      <img src="./img/LogoWVP.jpeg ">
    </div>
    <!-- Navegação com tag de listagem caso seja necessário adicionar mais páginas -->
    <nav id="navTabs">
      <ul>
        <li>
          <a href="#infoContainer">
            <h5>Fale conosco!</h5>
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <div class="home">
    <div class="homeTextDiv"><h1 class="homeText">Precisou de <g>ajuda?</g><br /> conte com a <g>WVPSoluções</g>
    </h1></div>
    <div class="empty"></div>
  </div>

  <section id="carousel">

    <!-- Carousel Bootstrap -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./img/carousel (1).jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/carousel (2).jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/carousel (3).jpeg" alt="Terceiro slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/carousel (4).jpeg" alt="Quarto slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/carousel (5).jpeg" alt="Quinto slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>
  <section id="buttons">
    <h1 class="title" id="whiteText">
      Expandimos seu potencial <g>tecnológico</g>!
    </h1>
    <div id="links">
      <button>
        Soluções em Hardware
      </button>
      <button class="centerButton">
        Software e sistemas
      </button>
      <button>
        Soluções em Serviços
      </button>
    </div>
  </section>

  <section id="details">
    <h1 class="title">
      Parceiros
    </h1>

    <section id="partners">
      <div id="imageContainer">
        <div id="imageBox">
          <img src="./img/dellTech.png">
        </div>
      </div>

      <div id="partnerContainer">
        <div id="partnerList">

          <?php

          for ($i = 1; $i <= 9; $i++) {
            echo '<div class="partnerSingle">
              <img src="./img/partner' . $i . '.jpeg">
              </div>';
          }

          ?>

        </div>
      </div>
    </section>
    
    <div id="line"></div>

    <h1 class="title">
      Clientes
    </h1>

    <section>
      <div id="clientContainer">
        <div id="clientList">

          <?php

          for ($i = 1; $i <= 12; $i++) {
            echo '<div class="clientSingle">
            <img src="./img/client' . $i . '.jpeg">
            </div>';
          }

          ?>

        </div>
      </div>
    </section>
  </section>

  <h1 class="title" id="whiteText">
    Venha nos <g>conhecer</g>
  </h1>

  <section id="adressInfo">
    <div id="pictureContainer">
      <div id="pictureBox">
        <img src="./img/adressPicture.jpeg">
      </div>
    </div>

    <div id="mapContainer">
      <div id="mapBox">
        <div id="map"></div>
      </div>
    </div>

  </section>

</body>

<footer>
  <div class="flexContainer">
    <div id="infoContainer">
      <div id="infoBox">
        <h6>Conte conosco em seus desafios de tecnologia.</h6>
        <label><i class="fa-solid fa-location-dot"></i>R. Vanda - Parque dos Camargos
          Barueri - SP</label><br>
        <label><i class="fa-solid fa-clock"></i>Horário Comercial
          Seg – Sex 09:00-18:00</label><br>
        <label><i class="fa-solid fa-phone"></i>11 4257-1412</label><br>
        <label><i class="fa-solid fa-envelope"></i>comercial@wvpsolucoes.com.br</label><br>
      </div>
    </div>
    <div id="formContainer">
      <div id="formBox">
        <h2>Fale com um Especialista</h2>
        <label>Nosso time está preparado para auxiliar você com a sua empresa e com o seu projeto!</label>
        <!--Formulário Bootstrap-->
        <form method="post">
          <div class="form-group">
            <input name="name" type="text" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Nome" required>
          </div>
          <div class="form-group">
            <input name="email" type="email" class="form-control" id="inputPassword" placeholder="Email" required>
          </div>
          <div class="form-group">
            <textarea name="subject" class="form-control" id="textMessage" rows="3" placeholder="Sua mensagem" required></textarea>
          </div>
          <input type="submit" class="btn btn-dark btn-block" name="send" value="Enviar mensagem">

          <?php
          if (isset($_POST['send'])) {
            $emailbody = "<html><body><p>" . $_POST['subject'] . "</p></body></html>";

            $email = email($_POST['email'], $_POST['name'], $_POST['subject']);
            echo $email;
          }

          ?>
        </form>
      </div>
    </div>
  </div>
  <div id="subFooter">

  </div>
</footer>

</html>