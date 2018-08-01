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



  <main>

    <div class="jumbotron">
      <h1 class="display-4">Próximamente</h1>
      <p class="lead">Esta información estará disponible próximamente.</p>
    </div>


    <h1 class="text-center">Departamento de Tecnologías de información y Comunicaciones</h1>
    <p class="text-center">Carretera Pachuca Cd. Sahagún km 20 Ex-Hacienda de Santa Bárbara Zempoala Hidalgo, México. CP-43830<br>
    Tel 01 (771) 54 77 510 ext 2217<br>
    Correo: <a href="sistemas@upp.edu.mx">sistemas@upp.edu.mx</a></p>

    <div class="container marketing">
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
