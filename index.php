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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cek Alamat IP">
    <meta name="author" content="~">
    <link rel="icon" href="css/favicon.png">

    <title>Cek Alamat IP</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/cosmo/bootstrap.min.css" rel="stylesheet">

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
