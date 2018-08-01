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

    <br />
    <img src="../lib18/images/logo-upp-15.jpg" class="rounded mx-auto d-block" alt="UPPachuca">
    <h1 class="text-center">Universidad Politécnica de Pachuca</h1>
    <br />
    <h2 class="text-center">Dr. Marco Antonio Flores González</h2>
    <p class="text-center">Rector de la Universidad Politécnica de Pachuca</p>
    <br />
    <br />
    <h2 class="text-center">Ing. Jorge Alfredo Fernández Salas</h2>
    <p class="text-center">Secretário Administrativo</p>
    <br />
    <br />
    <h2 class="text-center">M.T.I. David Luna Cruz</h2>
    <p class="text-center">Jefe del Departamento de Tecnologías de Información y Comunicaciones</p>
    <br />
    <br />
    <h3 class="text-center">Programación y desarrollo</h3>
    <p class="text-center">L.S.C. Francisco Moreno Vargas<br />
    Ruth Noemí Hernández Mora<br />
    Omar Alfredo Ortega Ramírez</p>
    <br />
    <br />
    <h2 class="text-center">L.C.C. Gustavo Genzález Pérez</h2>
    <p class="text-center">Encargado del Despacho de la Dirección de Comunicación Social</p>
    <br />
    <br />


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
