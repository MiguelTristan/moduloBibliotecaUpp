<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>
</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

  </header>

<!-- Menu menu-pegajoso DarkDesign -->
  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main class="main container">

    <div class="page-header">
      <h2 class="h3 text-center"></br>Biblioteca</h2>
    </div>

    <!-- Video UPP -->
    <div class="embed-responsive embed-responsive-16by9">
      <iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/wfM2tRqfSNE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>

    <hr/>

    <!-- Main principal -->
    <div class="main">
      <p class="text-justify">Consiste en la obtención de materiales para su consulta dentro de la biblioteca, mismos que podrá conseguir directamente de la estantería. En este servicio, el usuario puede consultar hasta tres títulos distintos, mismos que depositará, a su término de uso, en los lugares indicados para su posterior reubicación, por el personal bibliotecario.</p>
    </div>

    <!-- Separador -->
    <hr/>

    <div id="carousel-indicador" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-indicador" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-indicador" data-slide-to="1"></li>
        <li data-target="#carousel-indicador" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../lib18/images/images_lightbox/img1.jpg" alt="primerSlide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../lib18/images/images_lightbox/img2.jpg" alt="segundoSlide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../lib18/images/images_lightbox/img3.jpg" alt="terceroSlide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-indicador" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carousel-indicador" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>

    <hr/>
    <!-- Fin separador -->

    <!-- Titulo -->
    <h2 class="h3 text-center" id="id_servicios">Servicios</h2>
    <!-- Informacion servicios de biblioteca -->
    <!-- tab-de-'comprimidos' -->
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-prestamo-tab" data-toggle="pill" href="#pills-prestamo" role="tab" aria-controls="pills-prestamo" aria-selected="true">PRÉSTAMO EXTERNO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-reserva-tab" data-toggle="pill" href="#pills-reserva" role="tab" aria-controls="pills-reserva" aria-selected="false">PRÉSTAMO DE MATERIALES DE RESERVA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-linea-tab" data-toggle="pill" href="#pills-linea" role="tab" aria-controls="pills-linea" aria-selected="false">CONSULTA EN LÍNEA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-cubiculos-tab" data-toggle="pill" href="#pills-cubiculos" role="tab" aria-controls="pills-cubiculos" aria-selected="true">CUBÍCULOS DE ESTUDIO INDIVIDUAL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-catalogo-tab" data-toggle="pill" href="#pills-catalogo" role="tab" aria-controls="pills-catalogo" aria-selected="false">CATÁLOGO EN LÍNEA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-coleccion-tab" data-toggle="pill" href="#pills-coleccion" role="tab" aria-controls="pills-coleccion" aria-selected="false">COLECCIONES ESPECIALES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-fotocopiado-tab" data-toggle="pill" href="#pills-fotocopiado" role="tab" aria-controls="pills-fotocopiado" aria-selected="false">SERVICIO DE FOTOCOPIADO</a>
      </li>
    </ul>
    <!-- tab-de-contenidos -->
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active text-justify" id="pills-prestamo" role="tabpanel" aria-labelledby="pills-prestamo-tab">Consiste en la obtención de materiales para su consulta fuera de la biblioteca, mismos que deberá registrar en el módulo de préstamos, previa alta como usuario. El usuario estudiante, puede obtener hasta tres títulos distintos por un máximo de dos días
        hábiles, con opción a renovar por el mismo periodo. El usuario académico, puede obtener un título por asignatura impartida, durante un cuatrimestre o hasta cinco obras por un periodo de 10 días.</div>
      <div class="tab-pane fade" id="pills-reserva" role="tabpanel" aria-labelledby="pills-reserva-tab">Consiste en la obtención de materiales de reserva para su consulta fuera de la biblioteca, entre el cerrar y abrir de la biblioteca.</div>

      <div class="tab-pane fade" id="pills-linea" role="tabpanel" aria-labelledby="pills-linea-tab">Consiste en el acceso en línea a bases de datos como: IET Digital Library, ASME Digital Library, ASTM y Blackwell Synergy, desde las instalaciones de UPP o fuera de ésta. Acceso a recursos gratuitos selectos, que brindan información de calidad y fidedigna.</div>

      <div class="tab-pane fade active" id="pills-cubiculos" role="tabpanel" aria-labelledby="pills-cubiculos-tab">Espacios para el estudio de textos de manera individual o desarrollo de trabajos en equipo de cómputo, ya que cuentan con servicio de conexión a energía eléctrica. Cubículos de estudio grupal: Espacios privados para desarrollo de trabajos en equipo
        o asesorías.</div>
      <div class="tab-pane fade" id="pills-catalogo" role="tabpanel" aria-labelledby="pills-catalogo-tab">Consiste en el acceso dentro o fuera de la biblioteca al catálogo bibliográfico electrónico, para la consulta, ubicación y disponibilidad de los materiales documentales.</div>

      <div class="tab-pane fade" id="pills-coleccion" role="tabpanel" aria-labelledby="pills-coleccion-tab">Acceso a colecciones especiales como: INEGI, consulta, hemerografía, manuales de asignatura y manuales de prácticas de laboratorio.</div>

      <div class="tab-pane fade" id="pills-fotocopiado" role="tabpanel" aria-labelledby="pills-fotocopiado-tab">Brinda el servicio de fotocopiado, impresión, engargolado y un amplio surtido de artículos de papelería, acorde a las principales necesidades de los programas de estudio y la demanda de la comunidad.</div>
    </div>

    <!-- Fin de pill-info -->


    <!-- seccion -->
    <div>

      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

<!-- Librerias javascript -->
  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
