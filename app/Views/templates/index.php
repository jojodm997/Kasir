<!--
=========================================================
* Corporate UI - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/corporate-ui
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="<?= base_url() ?>/Corporate/assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="<?= base_url() ?>/Corporate/assets/img/favicon.png" />
    <title>Halo</title>
    <script src="<?= base_url('js/node_modules/jquery/dist/jquery.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>



    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700"
      rel="stylesheet"
    />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>/Corporate/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/Corporate/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/349ee9c857.js"
      crossorigin="anonymous"
    ></script>
    <link href="<?= base_url() ?>/Corporate/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link
      id="pagestyle"
      href="<?= base_url() ?>/Corporate/assets/css/corporate-ui-dashboard.css?v=1.0.0"
      rel="stylesheet"
    />
  </head>
  <?= $this->include('templates/topbar') ?>

  <?= $this->include('templates/sidebar') ?>

</html>
