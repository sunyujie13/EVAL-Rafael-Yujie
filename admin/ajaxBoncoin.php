<?php
require_once("inc/init-admin.php");
    $r = $pdo->query("SELECT * FROM cars");
    $resultat= $r ->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($resultat);
    echo $json;
// ?>


