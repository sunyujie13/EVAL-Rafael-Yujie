<?php
require_once("inc/headerAdmin.php");

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
        $carsCarroussel = $pdo->query("SELECT * FROM cars");
        $detailsCars = $carsCarroussel->fetchAll(PDO::FETCH_ASSOC);
		// var_dump($detailsCars);
		$carsCarroussel = $pdo->query("INSERT INTO cars(car_brand, car_model, gearbox, motor, car_type, car_serial_number, car_first_registration, car_cv, car_ch, car_energy, plate_number, km, number_key, ext_color, in_color, global_information, options, imgs, selling_price, price_letters, purchase_price, purchase_commission_price, status, old_selling_price, year, police_number, provider, purchase_date, origin, carscol, availability) VALUES ('$_POST[car_brand]', '$_POST[car_model]', '$_POST[gearbox]', '$_POST[motor]', '$_POST[car_type]', '$_POST[car_serial_number]', '$_POST[car_first_registration]', '$_POST[car_cv]', '$_POST[car_ch]', '$_POST[car_energy]', '$_POST[plate_number]', '$_POST[km]', '$_POST[number_key]', '$_POST[ext_color]', '$_POST[in_color]', '$_POST[global_information]', '$_POST[options]', '$_POST[imgs]', '$_POST[selling_price]', '$_POST[price_letters]', '$_POST[purchase_price]', '$_POST[purchase_commission_price]', '$_POST[status]', '$_POST[old_selling_price]', '$_POST[year]', '$_POST[police_number]', '$_POST[provider]', '$_POST[purchase_date]', '$_POST[origin]', '$_POST[carscol]', '$_POST[availability]')");

	}

      $content .= $erreur;
      if(!empty($_FILES["imgs"])){
            $nom_imgs = $_POST["car_brand"] . "_" . $_FILES["imgs"];
            $imgs_bdd = URL . "/images/$nom_imgs";
            $imgs_dossier = RACINE_SITE . "/images/$nom_imgs";
            copy($_FILES["imgs"], $imgs_dossier);
    
        }
}

?>
<!-- link base de donne -->


<h1 style="text-align: center;"> Ajouter une voiture </h1>

<?php echo $content ?>

<form method="post" action="#" style="width:50%;margin:auto;">

      <label for="car_brand">Car brand</label>
      <input type="text" class="form-control" placeholder="car brand" name="car_brand" id="car_brand" maxlength="20" pattern="[a-zA-Z0-9-_.]{3,20}" title="caractères acceptés : a-z A-Z 0-9 .-_" required><br>

      <label for="car_model">Car model</label>
      <input type="text" class="form-control" placeholder="car model" name="car_model" id="car_model" maxlength="20" pattern="[a-zA-Z0-9-_.]{3,20}" title="caractères acceptés : a-z A-Z 0-9 .-_" required><br>

      <label for="gearbox">Gearbox</label>
      <input type="text" class="form-control" placeholder="gearbox type" name="gearbox" id="gearbox"><br>

      <label for="motor">Motor</label>
      <input type="text" class="form-control" placeholder="motor" name="motor" id="motor"><br>

      <label for="car_type">Car type</label>
      <input type="text" class="form-control" placeholder="car type" name="car_type" id="car_type" required><br>

      <label for="car_serial_number">Car serial number</label>
      <input type="text" class="form-control" placeholder="car serial number" name="car_serial_number" id="car_serial_number" required><br>

      <label for="car_first_registration">Car first registration</label>
      <input type="date" class="form-control" placeholder="votre type" name="car_first_registration" id="car_first_registration" required ><br>

      <label for="car_cv">Car cv</label>
      <input type="text" class="form-control" placeholder="car_cv" name="car_cv" id="car_cv" required><br>

      <label for="car_ch">Car ch</label>
      <input type="text" class="form-control" placeholder="car_ch" name="car_ch" id="car_ch" required><br>

      <label for="car_energy">Car energy</label>
      <input type="text" class="form-control" placeholder="car_energy" name="car_energy" id="car_energy" required><br>

      <label for="plate_number">Plate number</label>
      <input type="text" class="form-control" placeholder="
te-239-em" name="plate_number" id="plate_number" required><br>

      <label for="km">Km</label>
      <input type="text" class="form-control" placeholder="km" name="km" id="km" required><br>

      <label for="number_key">Number key</label>
      <input type="text" class="form-control" placeholder="number_key" name="number_key" id="number_key" required><br>

      <label for="ext_color">Ext color</label>
      <input type="text" class="form-control" placeholder="ext_color" name="ext_color" id="ext_color" required><br>

      <label for="in_color">In color</label>
      <input type="text" class="form-control" placeholder="in_color" name="in_color" id="in_color" required><br>

      <label for="global_information">Global information</label>
      <input type="text" class="form-control" placeholder="global_information" name="global_information" id="global_information" required><br>

      <label for="options">Options</label>
      <input type="text" class="form-control" placeholder="options" name="options" id="options" required><br>

      <label for="imgs">Images</label>
      <input type="file" class="form-control"  name="imgs" id="imgs" required><br>

      <label for="selling_price">Selling price</label>
      <input type="text" class="form-control" placeholder="selling_price" name="selling_price" id="selling_price" required><br>

      <label for="price_letters">Price letters</label>
      <input type="text" class="form-control" placeholder="price_letters" name="price_letters" id="price_letters" required><br>

      <label for="purchase_price">Purchase price</label>
      <input type="text" class="form-control" placeholder="purchase_price" name="purchase_price" id="purchase_price" required><br>

      <label for="purchase_commission_price">Purchase commission price</label>
      <input type="text" class="form-control" placeholder="purchase_commission_price" name="purchase_commission_price" id="purchase_commission_price" required><br>

      <label for="status">Status</label>
      <input type="text" class="form-control" placeholder="status" name="status" id="status" required><br>

      <label for="old_selling_price">Old selling price</label>
      <input type="text" class="form-control" placeholder="old_selling_price" name="old_selling_price" id="old_selling_price" required><br>

      <label for="year">Year</label>
      <input type="text" class="form-control" placeholder="year" name="year" id="year" required><br>

      <label for="police_number">Police number</label>
      <input type="text" class="form-control" placeholder="police_number" name="police_number" id="police_number" required><br>

      <label for="provider">Provider</label>
      <input type="text" class="form-control" placeholder="provider" name="provider" id="provider" required><br>

      <label for="purchase_date">Purchase date</label>
      <input type="date" class="form-control" placeholder="purchase_date" name="purchase_date" id="purchase_date" required><br>

      <label for="origin">Origin</label>
      <input type="text" class="form-control" placeholder="origin" name="origin" id="origin" required><br>

      <label for="carscol">Carscol</label>
      <input type="text" class="form-control" placeholder="carscol" name="carscol" id="carscol" required><br>

      <label for="availability">Availability</label>
      <input type="text" class="form-control" placeholder="availability" name="availability" id="availability" required><br>

      <br>
      <input type="submit" class="btn btn-dark" value="Ajouter" name ="Ajouter la voiture"><br><br>

</form>


<div id="resultat"></div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


