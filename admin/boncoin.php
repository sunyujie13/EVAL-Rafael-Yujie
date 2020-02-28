
<?php
require_once("inc/headerAdmin.php");
require_once("inc/init-admin.php");
// var_dump($pdo);
$r = $pdo->query("SELECT * FROM cars INNER JOIN invoices WHERE id_invoice = '$_GET[id_invoice]'");
// var_dump($r);
$facture= $r ->fetch(PDO::FETCH_ASSOC);
// var_dump($facture);
?>
<div class = "container "  style="width:50%; background-color:#f2f2f2;">
    <div class = "row">
        <p class="font-weight-bold">Car Brand :</p>  <p class="font-weight-normal"><?php echo $facture["car_brand"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Car Model :</p>  <p class="font-weight-normal"><?php echo $facture["car_model"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Gearbox :</p>  <p class="font-weight-normal"><?php echo $facture["gearbox"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Motor :</p>  <p class="font-weight-normal"><?php echo $facture["motor"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Plate Number :</p>  <p class="font-weight-normal"><?php echo $facture["plate_number"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Car First Registration :</p>  <p class="font-weight-normal"><?php echo $facture["car_first_registration"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Kilometage :</p>  <p class="font-weight-normal"><?php echo $facture["km"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Color Ext :</p>  <p class="font-weight-normal"><?php echo $facture["ext_color"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Color IN :</p>  <p class="font-weight-normal"><?php echo $facture["in_color"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Color IN :</p>  <p class="font-weight-normal"><?php echo $facture["in_color"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Number Key :</p>  <p class="font-weight-normal"><?php echo $facture["number_key"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Origin :</p>  <p class="font-weight-normal"><?php echo $facture["origin"]; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Selling Price :</p>  <p class="font-weight-normal"><?php echo $facture["selling_price"]." € "; ?> </p>
    </div>
    <div class = "row">
        <p class="font-weight-bold">Information :</p>  <p class="font-weight-normal"><?php echo $facture["global_information"]; ?> </p>
    </div>




</div>

<div id="resultat"></div>
<!-- javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="js/app.js"></script>
<script src="js/appTout.js"></script>
<script src="js/boncoin.js"></script>

