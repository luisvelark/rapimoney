<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rapimoney</title>


  <link rel="shortcut icon" href="<?php echo base_url('/favicon.ico') ?>" type="image/x-icon">


  <!-- NORMALIZE -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/normalize.css') ?>">

  <!-- BULMA CSS -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/bulma css/bulma.min.css') ?>">

  <!-- OWN STYLES -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/style.css') ?>">

  <!-- RESPONSIVE -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/style/resposive.css') ?>">



</head>

<body>
  <!--TOP IMAGES! -->
  <header>

    <div class="pt-3">
      <div id="imagenes" class="is-flex is-justify-content-space-around content-imagenes">

        <picture>
          <source media="(min-width:769px)" srcset="<?php echo base_url('/assets/img/header/desktop/virtual-D.png') ?>"
            sizes="">
          <img class="item-virtual" src="<?php echo base_url('/assets/img/header/mobil/virtual.png') ?>" alt="virtual">
        </picture>

        <picture>
          <source media="(min-width:769px)" srcset="<?php echo base_url('/assets/img/header/desktop/pago-D.png') ?>"
            sizes="">
          <img class="item-pago" src="<?php echo base_url('/assets/img/header/mobil/pago.png') ?>" alt="pago">
        </picture>

        <picture>
          <source media="(min-width:769px)" srcset="<?php echo base_url('/assets/img/header/desktop/rapido-D.png') ?>"
            sizes="">
          <img class="item-rapido" src="<?php echo base_url('/assets/img/header/mobil/rapido.png') ?>" alt="rapido">
        </picture>

        <picture>
          <source media="(min-width:769px)" srcset="<?php echo base_url('/assets/img/header/desktop/virtual-D.png') ?>"
            sizes="">
          <img class="item-virtual" src="<?php echo base_url('/assets/img/header/mobil/virtual.png') ?>" alt="virtual">
        </picture>

        <picture>
          <source media="(min-width:769px)" srcset="<?php echo base_url('/assets/img/header/desktop/pago-D.png') ?>"
            sizes="">
          <img class="item-pago" src="<?php echo base_url('/assets/img/header/mobil/pago.png') ?>" alt="pago">
        </picture>

        <picture>
          <source media="(min-width:769px)" srcset="<?php echo base_url('/assets/img/header/desktop/rapido-D.png') ?>"
            sizes="">
          <img class="item-rapido" src="<?php echo base_url('/assets/img/header/mobil/rapido.png') ?>" alt="rapido">
        </picture>

        <picture>
          <source media="(min-width:769px)" srcset="<?php echo base_url('/assets/img/header/desktop/virtual-D.png') ?>"
            sizes="">
          <img class="item-virtual" src="<?php echo base_url('/assets/img/header/mobil/virtual.png') ?>" alt="virtual">
        </picture>

        <picture>
          <source media="(min-width:769px)" srcset="<?php echo base_url('/assets/img/header/desktop/pago-D.png') ?>"
            sizes="">
          <img class="item-pago" src="<?php echo base_url('/assets/img/header/mobil/pago.png') ?>" alt="pago">
        </picture>

        <picture>
          <source media="(min-width:769px)" srcset="<?php echo base_url('/assets/img/header/desktop/rapido-D.png') ?>"
            sizes="">
          <img class="item-rapido" src="<?php echo base_url('/assets/img/header/mobil/rapido.png') ?>" alt="rapido">
        </picture>

      </div>
    </div>
  </header>

  <!-- PROMO RAPIMONEY! -->
  <main class="mt-4 mb-0">

    <!-- SECCION DE MUY PRONTO -->
    <section class="content-pronto">
      <div class="pronto pt-2 my-1">
        <p
          class="is-size-5-mobile is-size-3-tablet is-size-2-desktop is-italic has-text-weight-bold has-text-white ml-5 test">
          MUY PRONTO</p>
        <hr class="mt-0 mb-4">
      </div>
    </section>

    <!-- SECCION LOGO -->
    <section class="pt-0 mt-2">
      <div class="content-logo">
        <img class="logo mt-3" src="<?php echo base_url('/assets/img/main/logo.png') ?>" alt="logo">
      </div>
    </section>

    <!--MODAL DEL ROMPECABEZAS -->
    <div id="page-modal" class="modal">
      <div class="modal-background"></div>
      <div class="modal-content">
        <!-- CONTENIDO EN EL MODAL! -->
        <div class="modal-wrap modal-wrap--position px-2 pt-2 ">

          <!-- <iframe id="mi-iframe" class="frame"
            src="https://www.jigsawplanet.com/?rc=play&amp;pid=1f54c72c8548&amp;view=iframe"
            style="width:100%;height:600px" frameborder=0 allowfullscreen>
          </iframe> -->

          <iframe id="mi-iframe" class="frame"
            src="https://www.jigsawplanet.com/?rc=play&amp;pid=0368b53e8e90&amp;view=iframe&amp;bgcolor=0xffffff"
            frameborder="0" allowfullscreen></iframe>

        </div>
      </div>
      <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <!--REDES SOCIALES -->
    <div class="content-redes">

      <a href="https://www.facebook.com/rapimoney.pe" target="_blank">
        <img class="redes" src="<?php echo base_url('/assets/img/footer/facebook.png') ?>" alt="facebook">
      </a>

      <a href="https://wa.me/51921434247?text=Hola,%20tengo%20tarjeta%20de%20cr%C3%A9dito%20y%20deseo%20retirar%20dinero%20en%20efectivo
" target="_blank">
        <img class="redes" src="<?php echo base_url('/assets/img/footer/whatsap.png') ?>" alt="whatasp">
      </a>

    </div>



    <!--IMAGENES DE EDIFICIOS -->
    <section>
      <div id="divEdificios" class="content-edificios">
        <div class="content-btn">
          <button id="btn-gana" class="button is-normal is-rounded btn has-text-white" data-modal="modal">JUEGA
            AQUÍ</button>
        </div>

        <!-- <div> -->
        <img class="edificio" src="<?php echo base_url('/assets/img/main/fondoedificios.png') ?>" alt="edificio">
        <!-- </div> -->

      </div>
    </section>


  </main>

  <!--REDES SOCIALES! -->
  <footer class="mt-0">
    <div class="content-derechos content-derechos--size">

      <p class="derechos derechos--font-zise">Copyright © 2021 RAPIMONEY, All rights reserved.</p>

    </div>
  </footer>

  <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script src="<?php echo base_url('/assets/js/imagenes-responsive.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/modal-puzzle.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/puzzle.js') ?>"></script>



</body>

</html>