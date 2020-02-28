<?php
require_once("inc/headerAdmin.php");
require_once("inc/init-admin.php");

if($_POST){
	$erreur = "";
	if(strlen($_POST["car_brand"]) < 3 ||  strlen($_POST["car_brand"]) > 20){
		$erreur .= "<div class='alert alert-danger' role='alert'>
					  Le car_brand doit comporter entre 3 et 20 caractères!
					</div>";
	}

	if(!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $_POST["car_brand"])){
		$erreur .= "<div class='alert alert-danger' role='alert'>
					  Le car_brand doit doit avoir une valeur alpha numérique!
					</div>";
	}

	foreach ($_POST as $indice => $valeur) {
		$_POST[$indice] = addslashes($valeur);
	}
	if(empty($erreur)){
        $carsCarroussel = $pdo->query("INSERT INTO invoices(invoice_number, first_name, last_name, address, postal_code, city, telephone, siret, city_invoice, date_invoice, police_number, car_brand, car_model, car_type, car_serial_number, car_cv, price_letters, number_key, total, reprise, reprise_number, ttc_total, payment_method, type, warranty, plate_number, km, car_first_registration) VALUES ( '$_POST[invoice_number]', '$_POST[first_name]', '$_POST[last_name]', '$_POST[address]', '$_POST[postal_code]', '$_POST[city]', '$_POST[telephone]', '$_POST[siret]', '$_POST[city_invoice]', '$_POST[date_invoice]', '$_POST[police_number]', '$_POST[car_brand]', '$_POST[car_model]', '$_POST[car_type]', '$_POST[car_serial_number]', '$_POST[car_cv]
        ', '$_POST[price_letters]', '$_POST[number_key]', '$_POST[total]', '$_POST[reprise]', '$_POST[reprise_number]', '$_POST[ttc_total]', '$_POST[payment_method]', '$_POST[type]', '$_POST[warranty]', '$_POST[plate_number]', '$_POST[km]', '$_POST[car_first_registration]')");
        }

  $content .= $erreur;

  // if(empty($erreur)){
  //   $carsCarroussel = $pdo->query("SELECT * FROM invoices(invoice_number, ) VALUES ( '$_GET[invoice_number]'");
  //   }

}



?>
<!-- link base de donne -->
<h1 style="text-align: center;"> Ajouter une facture </h1>

<!-- <form method="get" action="#" style="width:50%;margin:auto;">
  <div class = "container">
    <select name="getInfoFacture" id="getInfoFacture" method ="get">
      <option value="0">0</option>
      <option value="1" id ="1">1</option>
    </select>
  </div><br>
</form> -->



<?php echo $content ?>

<form method="post" action="#" style="width:50%;margin:auto;">

      <label for="invoice_number">invoice_number</label>
      <input type="text" class="form-control" placeholder="car brand" name="invoice_number" id="invoice_number" maxlength="20" pattern="[a-zA-Z0-9-_.]{3,20}" title="caractères acceptés : a-z A-Z 0-9 .-_" required><br>

      <label for="first_name">first_name</label>
      <input type="text" class="form-control" placeholder="car model" name="first_name" id="first_name" maxlength="20" pattern="[a-zA-Z0-9-_.]{3,20}" title="caractères acceptés : a-z A-Z 0-9 .-_" required><br>

      <label for="last_name">last_name</label>
      <input type="text" class="form-control" placeholder="last_name type" name="last_name" id="last_name"><br>

      <label for="address">address</label>
      <input type="text" class="form-control" placeholder="address" name="address" id="address"><br>

      <label for="postal_code">postal_code</label>
      <input type="text" class="form-control" placeholder="car type" name="postal_code" id="postal_code" required><br>

      <label for="city">city</label>
      <input type="text" class="form-control" placeholder="car serial number" name="city" id="city" required><br>

      <label for="telephone">telephone</label>
      <input type="text" class="form-control" placeholder="votre type" name="telephone" id="telephone" required >1<br>

      <label for="siret">siret</label>
      <input type="text" class="form-control" placeholder="siret" name="siret" id="siret" required><br>

      <label for="city_invoice">city invoice</label>
      <input type="text" class="form-control" placeholder="city_invoice" name="city_invoice" id="city_invoice" required><br>

      <label for="date_invoice">date invoice</label>
      <input type="date" class="form-control" placeholder="date_invoice" name="date_invoice" id="date_invoice" required><br>

      <label for="plate_number">Plate number</label>
      <input type="text" class="form-control" placeholder="plate_number" name="plate_number" id="plate_number" required><br>

      <label for="car_brand">car brand</label>
      <input text="text" class="form-control" placeholder="car_brand" name="car_brand" id="car_brand" required><br>

      <label for="car_model">car model</label>
      <input type="text" class="form-control" placeholder="car_model" name="car_model" id="car_model" required><br>

      <label for="car_type">car type</label>
      <input type="text" class="form-control" placeholder="car_type" name="car_type" id="car_type" required><br>

      <label for="car_serial_number">car serial number</label>
      <input type="text" class="form-control" placeholder="car_serial_number" name="car_serial_number" id="car_serial_number" required><br>

      <label for="car_cv">car cv</label>
      <input text="text" class="form-control" placeholder="car_cv" name="car_cv" id="car_cv" required><br>

      <label for="price_letters">price letters</label>
      <input type="text" class="form-control" placeholder="price_letters" name="price_letters" id="price_letters" required><br>

      <label for="number_key">number key</label>
      <input type="text" class="form-control" placeholder="number_key" name="number_key" id="number_key" required><br>

      <label for="total">total</label>
      <input type="text" class="form-control" placeholder="total" name="total" id="total" required><br>

      <label for="reprise">reprise</label>
      <input type="text" class="form-control" placeholder="reprise" name="reprise" id="reprise" required><br>

      <label for="reprise_number">reprise number</label>
      <input type="text" class="form-control" placeholder="reprise_number" name="reprise_number" id="reprise_number" required><br>

      <label for="ttc_total">ttc total</label>
      <input type="text" class="form-control" placeholder="ttc_total" name="ttc_total" id="ttc_total" required><br>

      <label for="payment_method">payment method</label>
      <input type="text" class="form-control" placeholder="payment_method" name="payment_method" id="payment_method" required><br>

      <label for="type">type</label>
      <input type="text" class="form-control" placeholder="type" name="type" id="type" required><br>

      <label for="warranty">warranty</label>
      <input type="text" class="form-control" placeholder="warranty" name="warranty" id="warranty" required><br>

      <label for="km">km</label>
      <input type="text" class="form-control" placeholder="km" name="km" id="km" required><br>

      <label for="car_first_registration">car_first_registration</label>
      <input type="date" class="form-control" placeholder="car_first_registration" name="car_first_registration" id="car_first_registration" required><br>

      <br>
      <input type="submit" class="btn btn-dark" value="Ajouter" name ="Ajouter la voiture"><br><br>

</form>





<div id="resultat"></div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="js/getInfoFacture.js"></script>


