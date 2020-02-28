<?php 
require_once("../inc/init.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  p{
    padding:0.5em;
  }
  </style>
  <!-- bootsrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <!--=================================
 header -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SH-AUTO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active"><a class="nav-link" href="../index.php"> Accueil</a></li>
    
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Voiture</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a  class="dropdown-item" href="../purchase.php">Achat</a>
        <a  class="dropdown-item" href="../listing-01.php">Vente</a>
        <a  class="dropdown-item" href="../car-demand.php">Demande précise</a>
      </div>
    </li>
    
    <li class="nav-item active"><a href="../contact.php"> Contact </a></li>
    
    <li class="nav-item active"><a href="../opinion.php">Avis </a></li>
    
    <li class="nav-item active"><a href="../connecter.php"> Connecter </a> </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div style="height: 60px;"></div>
<div class="row" style="width:60%;margin:auto;">
  <li><a href="addClients.php"style="font-size:1.2em;padding:1em;"> Add Clients </a> 
  </li>
  <li><a href="addCars.php" style="font-size:1.2em;padding:1em;"> Add Cars </a> 
  </li>
  <li><a href="addFacture.php" style="font-size:1.2em;padding:1em;"> Add Facture </a> 
  </li>
</div>
<br>








 <!--=================================
 header -->
</body>
</html>

<!--=================================
 header -->




<!-- scrip -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




 <!--=================================
 header -->