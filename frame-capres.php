<?php
  include "administrator/config/config_db.php";
  $data = new configData();
?>
<!DOCTYPE html>
<html>
<head>  
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- AUTO REFRESH -->
    <meta http-equiv="refresh" content="10">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Pemilu 2019</title>
    <link rel="icon" type="image/jpg" href="img/cakra.jpg" style="border-radius:20px;">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- CSS  -->      
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Skill Progress Bar -->
    <link href="css/pro-bars.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Default Theme CSS File-->
    <link id="switcher" href="css/themes/dark-red-theme.css" type="text/css" rel="stylesheet" media="screen,projection"/>     
    <!-- Main css File -->
    <link href="style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!-- Font -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
  <body>
          <?php 
            include 'template/pages/capres.php';
          ?>
    <?php include 'template/js.php';?>
  </body>
</html>