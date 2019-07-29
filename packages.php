<?php
include 'session.php';
include 'sidebar.php';
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Packages</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500.700'>

      <link rel="stylesheet" href="cssp/style.css">

  
</head>

<body>
  <h1 class="title">W O R K . T R A V E L . S A V E . R E P E A T</h1>

<div id="app" class="container">
    <a href="heritage_final.php">
  <card data-image="imgp/a6.jpg" >
    <h1 slot="header">Heritage</h1>
    <p slot="content">Culture consists of connections, not of separations: to specialize is to isolate.</p>
        </card></a>
        <a href="pilgrimage_final.php">
  <card data-image="imgp/p3.jpg">
    <h1 slot="header">Pilgrimage</h1>
    <p slot="content">Faith is not the clinging to a shrine but an endless pilgrimage of the heart.</p>
  </card>
  </a>
  <a href="honeyfinal.php">
  <card data-image="imgp/h3.jpg">
    <h1 slot="header">Honeymoon</h1>
    <p slot="content">Handpicked packages for couples</p>
  </card>
  </a>
  <a href="wildlife_final.php">
  <card data-image="imgp/w1.jpg">
    <h1 slot="header">Wildlife Sanctuary </h1>
    <p slot="content">Seeing a wildlife sanctuary is like seeing celebrities,only better.</p>
  </card>
  </a>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js'></script>

    <script src="jsp/index.js"></script>

</body>
</html>
