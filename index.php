<?php 
require('function/minify.php');
require('function/getip.php');
require('function/getbrow.php');
require('function/getos.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="Cek Alamat IP">
    <meta name="author" content="~">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/ico/favicon-16x16.png">
    <link rel="manifest" href="assets/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Cek Alamat IP</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

  </head>

  <body>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1><?=$ip[0]?></h1>
      </div>
      <p class="lead">Browser: <?=$brow[0]?></p>
      <p class="lead">Operation System: <?=$os[0]?></p>
      <p>View in <a href="./text" target="_blank">plaintext</a> or <a href="./json" target="_blank">json</a> format.</p>
    </div>

    <div class="footer">
      <div class="container">
        <p class="text-muted">made with &hearts; by <a href="http://masdzub.com" target="_blank">masdzub.com</a></p>
      </div>
    </div>

  </body>
</html>
