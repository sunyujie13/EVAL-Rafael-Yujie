<?php
require_once("inc/init-admin.php");

$invoice_number =  $_GET["facture"];
    
   if(isset($invoice_number)){
       $r = $pdo->query("SELECT * FROM invoices WHERE invoice_number= '$invoice_number'");
   } ;
    $resultat= $r ->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($resultat); 
    echo $json;
// ?>


