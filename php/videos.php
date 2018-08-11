<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css" />
  <link rel="stylesheet" href="../assets/css/card.css">


  <title>Expomedia | Talleres</title>
  <style>
  .grid figure {
    min-width: 100% !important;
    max-width: 100% !important;
  }
</style>
</head>

<body class="BodyBg">
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <?php @include('../includes/menu2.php'); ?>
        </div>
      </div>
      <div class="row">
        <div id="img-header" class="imgHeader col-sm-12">
          <img src="../assets/images/torneoHeader.png" alt="Ganadores-pasados-del-torneo-de-League-of-Legends">
        </div>
      </div>
    </div>
  </header>
  
  <br><br>

  <div id="contenido-pagina">

    <div class="jumbotron jumbotron-fluid">
      <div class=""><!--container padding-box-->
        <h1 class="text-center">Streamings</h1>
      </div>
    </div>

    <br><br>
    <!--Sección para mostrar los videos-->
    <section class="container-fluid">

      <div class="row align-items-center">
        <div class="col-12 col-md-6 ">
          <div id= "carouselExampleSlidesOnly" class= "carousel  contenedor-Slide newWidthSlide" data-interval="0">
            <div id= "carouselExampleControls" class= "carousel" data-interval="0">
              <div class= "carousel-inner">
                <!--Primera linea-->
                <div class= "carousel-item active" data-interval="0">
                  <div class="video-responsive">
                    <iframe class="item active" src="https://gaming.youtube.com/embed/live_stream?channel=UCHIRfIk580TJ27ybm8pTpLQ&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
                <div class= "carousel-item">
                  <div class="video-responsive">
                    <iframe class="item active" src="https://gaming.youtube.com/embed/live_stream?channel=UCHIRfIk580TJ27ybm8pTpLQ&autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
                <div class= "carousel-item">
                  <div class="video-responsive">
                    <iframe class="item active" src="https://www.youtube.com/embed/95ghQs5AmNk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
                <div class= "carousel-item">
                  <div class="video-responsive">
                    <iframe class="item active" src="https://www.youtube.com/embed/L-YWi6Kmp-g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--Fin del col-12 col-md-6 #1-->

        <div class="col-12 col-md-6">

          <div id="texto1" class="card bg-light mb-3 align-self-start" style="max-width: 100%;">
            <div class="card-header text-center"><h3>Taller de la charla #1<br>por John Wayne</h3></div>
            <div class="card-body">
              <h6 class="card-text">El fotógrafo John Wayne ha ejercido su profesión durante muchos años, administra su propia empresa y ha impartido lecciones de fotografía en universidades.</h6>
            </div>
          </div><!--card #1-->

          <div id="texto2" class="card bg-light mb-3 align-self-start" style="max-width: 100%; display:none;">
            <div class="card-header text-center"><h3>Taller de la charla #2<br>por Sebastian Brenes</h3></div>
            <div class="card-body">
              <h6 class="card-text">Estudiante de la carrera de Informática y Tecnología Multimedia, influenciado por su padre (escultor) y madre (profesora de ballet), se dedicó a pulir sus habilidades en el dibujo.</h6>
            </div>
          </div><!--card #2-->

          <div id="texto3" class="card bg-light mb-3 align-self-start" style="max-width: 100%; display:none;">
            <div class="card-header text-center"><h3>Taller de la charla #3<br>por Sebastian Brenes</h3></div>
            <div class="card-body">
              <h6 class="card-text">Es un Database Manager, Scrum Master y Big Data: Web Mining costarricense/inglés, dedicado al desarrollo de software de análisis de datos aplicados y aprendizaje estadístico automático, y a empresas para la resolución de problemas en una pymes, mediana o grande empresa.</h6>
            </div>
          </div><!--card #3-->

          <div id="texto4" class="card bg-light mb-3 align-self-start" style="max-width: 100%; display:none;">
            <div class="card-header text-center"><h3>Taller de la charla #4<br>por Sebastian Brenes</h3></div>
            <div class="card-body">
              <h6 class="card-text">Es un videojuego de género multiplayer online battle arena (MOBA) y deporte electrónico desarrollado por Riot Games para Microsoft Windows y OS X.</h6>
            </div>
          </div><!--card #3-->
        </div><!--Fin del col-12 col-mg-6 #2-->

      </div><!--fin del row-->

    </section>

    <br><br>

    <section>
     <!-- CARD DE LAS CHARLAS -->
     <div class="container-fluid">
      <div class="row">

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <article class="material-card Pink">
            <h2>
              <span>Christopher Walken</span>
              <strong>
                <div data-target= "#carouselExampleControls" data-slide-to="0" class="card-people">
                  <i class="fa fa-fw fa-star"></i>
                  <a class="link-card" id="cuarto" onclick="info1()">Taller #1</a>
                </div>
              </strong>
            </h2>
            <div class="mc-content">
              <div class="img-container">
                <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-christopher-walken.jpg">
              </div>
              <div class="mc-description">
                He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
              </div>
            </div>
            <a class="mc-btn-action">
              <i class="fa fa-bars"></i>
            </a>
            <div class="mc-footer">
              <h4>
                Social
              </h4>
              <a class="fa fa-fw fa-facebook"></a>
              <a class="fa fa-fw fa-twitter"></a>
              <a class="fa fa-fw fa-linkedin"></a>
              <a class="fa fa-fw fa-google-plus"></a>
            </div>
          </article>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <article class="material-card Pink">
            <h2>
              <span>Christopher Walken</span>
              <strong>
                <div data-target= "#carouselExampleControls" data-slide-to="1" class="card-people">
                  <i class="fa fa-fw fa-star"></i>
                  <a class="link-card" id="cuarto" onclick="info2()">Taller #2</a>
                </div>
              </strong>
            </h2>
            <div class="mc-content">
              <div class="img-container">
                <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-christopher-walken.jpg">
              </div>
              <div class="mc-description">
                He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
              </div>
            </div>
            <a class="mc-btn-action">
              <i class="fa fa-bars"></i>
            </a>
            <div class="mc-footer">
              <h4>
                Social
              </h4>
              <a class="fa fa-fw fa-facebook"></a>
              <a class="fa fa-fw fa-twitter"></a>
              <a class="fa fa-fw fa-linkedin"></a>
              <a class="fa fa-fw fa-google-plus"></a>
            </div>
          </article>
        </div>



        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <article class="material-card Pink">
            <h2>
              <span>Christopher Walken</span>
              <strong>
                <div data-target= "#carouselExampleControls" data-slide-to="2" class="card-people">
                  <i class="fa fa-fw fa-star"></i>
                  <a class="link-card" id="cuarto" onclick="info3()">Taller #3</a>
                </div>
              </strong>
            </h2>
            <div class="mc-content">
              <div class="img-container">
                <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-christopher-walken.jpg">
              </div>
              <div class="mc-description">
                He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
              </div>
            </div>
            <a class="mc-btn-action">
              <i class="fa fa-bars"></i>
            </a>
            <div class="mc-footer">
              <h4>
                Social
              </h4>
              <a class="fa fa-fw fa-facebook"></a>
              <a class="fa fa-fw fa-twitter"></a>
              <a class="fa fa-fw fa-linkedin"></a>
              <a class="fa fa-fw fa-google-plus"></a>
            </div>
          </article>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <article class="material-card Pink">
            <h2>
              <span>Christopher Walken</span>
              <strong>
                <div data-target= "#carouselExampleControls" data-slide-to="3" class="card-people">
                  <i class="fa fa-fw fa-star"></i>
                  <a class="link-card" id="cuarto" onclick="info4()">Taller #4</a>
                </div>
              </strong>
            </h2>
            <div class="mc-content">
              <div class="img-container">
                <img class="img-responsive" src="http://u.lorenzoferrara.net/marlenesco/material-card/thumb-christopher-walken.jpg">
              </div>
              <div class="mc-description">
                He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...
              </div>
            </div>
            <a class="mc-btn-action">
              <i class="fa fa-bars"></i>
            </a>
            <div class="mc-footer">
              <h4>
                Social
              </h4>
              <a class="fa fa-fw fa-facebook"></a>
              <a class="fa fa-fw fa-twitter"></a>
              <a class="fa fa-fw fa-linkedin"></a>
              <a class="fa fa-fw fa-google-plus"></a>
            </div>
          </article>
        </div>
      </div>  <!--fIN DEL ROW CARDS-->   
    </div><!--FIN DE LAS CARDS-->
  </section>








  <footer>
    <?php @include('../includes/footer.php'); ?>
  </footer> 

</div> <!--Fin de contenidoPagina-->

<script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="../js/streams.js"></script>
<script src="../assets/js/scriptsNav2.js"></script>
<script src="../assets/js/card.js"> </script>

</body>

</html>