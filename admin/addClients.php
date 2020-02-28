<?php
require_once("inc/headerAdmin.php");

if($_POST){
	$erreur = "";
	if(strlen($_POST["first_name"]) < 3 ||  strlen($_POST["first_name"]) > 20){
		$erreur .= "<div class='alert alert-danger' role='alert'>
					  Le first_name doit comporter entre 3 et 20 caractères!
					</div>";
	}

	if(!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $_POST["first_name"])){
		$erreur .= "<div class='alert alert-danger' role='alert'>
					  Le first_name doit doit avoir une valeur alpha numérique!
					</div>";
	}

	foreach ($_POST as $indice => $valeur) {
		$_POST[$indice] = addslashes($valeur);
	}
	if(empty($erreur)){
        $carsCarroussel = $pdo->query("SELECT * FROM clients");
        $detailsCars = $carsCarroussel->fetchAll(PDO::FETCH_ASSOC);
		// var_dump($detailsCars);
		$carsCarroussel = $pdo->query("INSERT INTO clients(first_name,last_name,address, postal_code, city, telephone, type ,siret,birth_date,gender) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[address]','$_POST[postal_code]','$_POST[city]','$_POST[telephone]','$_POST[type]','$_POST[siret]','$_POST[birth_date]','$_POST[gender]')");

	}

	$content .= $erreur;

}




?>
<!-- link base de donne -->





<h1 style="text-align: center;"> Add Clients </h1>

<?php echo $content ?>

<form method="post" action="#" style="width:50%;margin:auto;">

		<label for="first_name">first_name</label>
		<input type="text" class="form-control" placeholder="first_name" name="first_name" id="first_name" maxlength="20" pattern="[a-zA-Z0-9-_.]{3,20}" title="caractères acceptés : a-z A-Z 0-9 .-_" required><br>
	
		<label for="last_name">last_name</label>
		<input type="text" class="form-control" placeholder="last_name" name="last_name" id="last_name" maxlength="20" pattern="[a-zA-Z0-9-_.]{3,20}" title="caractères acceptés : a-z A-Z 0-9 .-_" required><br>

		<label for="address">address</label>
		<input type="text" class="form-control" placeholder="votre address" name="address" id="address"><br>
	
		<label for="postal_code">postal_code</label>
		<input type="text" class="form-control" placeholder="votre postal_code" name="postal_code" id="postal_code"><br>

		<label for="cityl">city</label>
        <input type="text" class="form-control" placeholder="votre city" name="city" id="city" required><br>
        
		<label for="telephone">telephone</label>
        <input type="text" class="form-control" placeholder="votre telephone" name="telephone" id="telephone" required><br>
        
		<label for="type">type</label>
        <input type="text" class="form-control" placeholder="votre type" name="type" id="type" required ><br>
        
		<label for="siret">siret</label>
        <input type="text" class="form-control" placeholder="votre siret" name="siret" id="siret" required><br>
        
		<label for="birth_date">birth_date</label>
        <input type="date" class="form-control" placeholder="yyyy/dd/mm" name="birth_date" id="birth_date" required><br>
        
		<label for="birth_palce">birth_palce</label>
        <input birth_palce="text" class="form-control" placeholder="votre birth_palce" name="birth_palce" id="birth_palce" required><br>
        
		<label for="gender">gender</label>
		<input type="text" class="form-control" placeholder="F/M" name="gender" id="gender" required><br>
	    <br>
		<input type="submit" class="btn btn-dark" value="Inscription" name ="inscription"><br><br>
	
</form>
<div id="resultat"></div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


