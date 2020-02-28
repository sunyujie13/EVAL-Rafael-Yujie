<?php

$pdo = new PDO('mysql:host=localhost;dbname=sh-auto', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$carsCarroussel = $pdo->query("SELECT * FROM cars");
$detailsCars = $carsCarroussel->fetch(PDO::FETCH_ASSOC);

// session_start();


define("RACINE_SITE", $_SERVER["DOCUMENT_ROOT"] . "../Eval-Rafael-Yujie");
define("URL", "http://localhost/Eval-Rafael-Yujie");

$content="";

?>
