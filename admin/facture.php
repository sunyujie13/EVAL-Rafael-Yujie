<?php
require_once("inc/headerAdmin.php");
require_once("inc/init-admin.php");
// var_dump($pdo);

$r = $pdo->query("SELECT * FROM invoices WHERE id_invoice = '$_GET[id_invoice]'");
// var_dump($r);
$facture= $r ->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">

      <div class="row">

        <div class="col-md-6">
          <h1> SH AUTO </h1>
          <h2> 2 chemin du Ponceau </h2>
          <h4> 02200 Soissons </h4>
          <h4> Tél: 07.82.14.81.41 </h4>
          <h5> Siren : 844 913 822 </h5>
          <h6> contactshauto@gmail.com </h6>
        </div>
      </div>

      <div class="row d-flex justify-content-end">

<div class="col-md-6" style="text-align :right;">
  <h4> <?php echo $facture[0]["first_name"] ?> </h4>
  <h4> <?php echo $facture[0]["last_name"] ?> </h4>
  <h4> <?php echo $facture[0]["address"] ?> </h4>
  <h4> <?php echo $facture[0]["postal_code"] ?> </h4>
  <h4> <?php echo $facture[0]["city"] ?> </h4>
  <h4> <?php echo $facture[0]["telephone"] ?> </h4>
</div>

</div>

<div class="row invoiceHeader">
        <ul class="d-flex justify-content-between">
          <li>Facture Nº</li>
          <li><?php echo $facture[0]["id_invoice"] ?></li>
          <li>Reims, le</li>
          <li><?php echo $facture[0]["date_invoice"] ?></li>
        </ul>
      </div>
      <div class="row invoiceContent mt-2">

        <table class ="table table-striped">
          <tr>
            <th>Invoice Number</th>
            <th>Car Brand</th>
            <th>Car model</th>
            <th>Car CV</th>
            <th>Car first registration</th>
            <th>Reprise</th>
            <th>Payment Method</th>
          </tr>

          <?php
            foreach ($facture as $key => $value) { ?>
              <tr>
                <td> <?php echo $value["invoice_number"]; ?> </td>
                <td> <?php echo $value["car_brand"]; ?> </td>
                <td> <?php echo $value["car_model"]; ?> </td>
                <td> <?php echo $value["car_cv"]; ?> </td>
                <td> <?php echo $value["car_first_registration"]; ?> </td>
                <td> <?php echo $value["reprise"]; ?> </td>
                <td> <?php echo $value["payment_method"]; ?> </td>
              </tr>
            <?php }?>

            <tr>
            <th>Siret</th>
            <th>Number Key</th>
            <th>Kilometrage</th>
            <th>Warranty</th>
            <th>Plate number</th>
            <th>Total</th>
            <th>Total Ttc</th>
          </tr>

          <?php
            foreach ($facture as $key => $value) { ?>
              <tr>
                <td> <?php echo $value["siret"]; ?> </td>
                <td> <?php echo $value["number_key"]; ?> </td>
                <td> <?php echo $value["km"]; ?> </td>
                <td> <?php echo $value["warranty"]; ?> </td>
                <td> <?php echo $value["plate_number"]; ?> </td>
                <td> <?php echo $value["total"]." €"; ?> </td>
                <td> <?php echo $value["ttc_total"]." €"; ?> </td>
              </tr>
            <?php }?>

          
        </table>

      </div>
      <div class="row invoiceFooter mt-2">

<div class="d-flex bd-highlight">

  <div class="ml-auto bd-highlight backgroundGey" style="font-weight:bold"><?php echo $facture[0]["ttc_total"] ?></div>
</div>
</div>

<div class="row d-flex justify-content-between invoiceTotal mt-2">

<div class="col-md-5">
  <div class="headerTotal" style="font-weight:bold"> Vendeur </div>
</div>

<div class="col-md-5 d-flex flex-column justify-content-around" style="padding:10px 0 10px 10px">

<div class="d-flex bd-highlight">
  <div class="mr-auto bd-highlight" style="font-weight:bold">Total TTC</div>
  <div class="ml-auto bd-highlight backgroundGeySmall" style="padding: 0 10px;font-weight:bold"><?php echo $facture[0]["ttc_total"] ?></div>
</div>

<div class="d-flex bd-highlight">
  <div class="mr-auto bd-highlight" style="font-weight:bold">Mode de réglement</div>
  <div class="ml-auto bd-highlight" style="    padding: 0 10px;">Virement</div>
</div>

</div>

</div>

</div>
<div style="height: 30em;"></div>