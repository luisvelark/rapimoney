<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rapimoney</title>

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
      <div class="pt-3">
        <div id="imagenes" class="is-flex is-justify-content-space-around content-imagenes">

          <picture>
            <source media="(min-width:769px)"
              srcset="<?php echo base_url('/assets/img/header/desktop/virtual-D.png') ?>" sizes="">
            <img class="item-virtual" src="<?php echo base_url('/assets/img/header/mobil/virtual.png') ?>"
              alt="virtual">
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
            <source media="(min-width:769px)"
              srcset="<?php echo base_url('/assets/img/header/desktop/virtual-D.png') ?>" sizes="">
            <img class="item-virtual" src="<?php echo base_url('/assets/img/header/mobil/virtual.png') ?>"
              alt="virtual">
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
            <source media="(min-width:769px)"
              srcset="<?php echo base_url('/assets/img/header/desktop/virtual-D.png') ?>" sizes="">
            <img class="item-virtual" src="<?php echo base_url('/assets/img/header/mobil/virtual.png') ?>"
              alt="virtual">
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
    </div>
  </header>

  <!-- PROMO RAPIMONEY! -->
  <main class="mt-6 mb-0">

    <!-- SECCION DE MUY PRONTO -->
    <section class="pt-5 my-4">
      <p class="is-size-5-mobile is-size-3-tablet is-size-2-desktop is-italic has-text-weight-bold has-text-white ml-5">
        MUY PRONTO</p>
      <hr class="mt-0 mb-4">
    </section>

    <!-- SECCION LOGO -->
    <section class="pt-0 mt-6">
      <div class="content-logo">
        <img class="logo mt-5" src="<?php echo base_url('/assets/img/main/logo.png') ?>" alt="logo">
      </div>
    </section>

    <!-- <section class="pt-4 my-6 is-flex is-justify-content-center">
      <button id="btn-gana" class="button is-normal is-rounded btn has-text-white my-1" data-modal="modal">GANA
        AQUÍ</button>
    </section> -->

    <!--MODAL DEL ROMPECABEZAS -->
    <div id="page-modal" class="modal">
      <div class="modal-background"></div>
      <div class="modal-content">
        <!-- CONTENIDO EN EL MODAL! -->
        <div class="modal-wrap modal-wrap--position px-2 pt-2 ">
          <iframe id="mi-iframe" class="frame"
            src="https://www.jigsawplanet.com/?rc=play&amp;pid=272c93685faf&amp;view=iframe"
            style="width:100%;height:600px" frameborder=0 allowfullscreen>
          </iframe>
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
          <button id="btn-gana" class="button is-small is-rounded btn has-text-white" data-modal="modal">JUEGA
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

      <!-- <div class="item-redes">
        <a href="https://www.facebook.com/rapimoney.pe" target="_blank">
          <img class="redes" src="<?php #echo base_url('/assets/img/footer/facebook.png') ?>" alt="">
          <span class="is-size-6 has-text-white">/RapiMoney</span>
        </a>

      </div>

      <div class="item-redes">
        <a href="https://wa.me/51921434247?text=Hola,%20tengo%20tarjeta%20de%20cr%C3%A9dito%20y%20deseo%20retirar%20dinero%20en%20efectivo
" target="_blank">
          <img class="redes" src="<?php #echo base_url('/assets/img/footer/whatsap.png') ?>" alt="">
          <span class="is-size-6 has-text-white">921 434 247</span>
        </a>
      </div> -->

    </div>
  </footer>

  <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script src="<?php echo base_url('/assets/js/imagenes-responsive.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/modal-puzzle.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/puzzle.js') ?>"></script>



</body>

</html>