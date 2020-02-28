<?php

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
	
    $carsCarroussel = $pdo->query("SELECT * FROM clients WHERE first_name = '$_POST[first_name]'");
    var_dump($carsCarroussel);

	
	if($carsCarroussel->rowCount() >= 1){
		$erreur .= "<div class='alert alert-danger' role='alert'>
					  first_name non disponible, veuillez-choisir un autre first_name
					</div>";
	}

	foreach ($_POST as $indice => $valeur) {
		$_POST[$indice] = addslashes($valeur);
	}


	if(empty($erreur)){
        $carsCarroussel = $pdo->query("SELECT * FROM clients");
        $detailsCars = $carsCarroussel->fetchAll(PDO::FETCH_ASSOC);
        var_dump($detailsCars);

	}

	$content .= $erreur;

}

?>


, siret, birth_date,birth_palce,gender

,'$siret','$birth_date','$birth_palce','$gender








if($r->rowcount() >= 1){
		if(password_verify($_POST["mdp"], $clients["mdp"])){

			$_SESSION["clients"]["id_client"] = $clients["id_client"];
			$_SESSION["clients"]["first_name"] = $clients["first_name"];
			$_SESSION["clients"]["last_name"] = $clients["last_name"];
			$_SESSION["clients"]["address"] = $clients["address"];
			$_SESSION["clients"]["postal_code"] = $clients["postal_code"];
			$_SESSION["clients"]["city"] = $clients["city"];
			$_SESSION["clients"]["telephone"] = $clients["telephone"];
			$_SESSION["clients"]["type"] = $clients["type"];
			$_SESSION["clients"]["siret"] = $clients["siret"];
			$_SESSION["clients"]["birth_date"] = $clients["birth_date"];
			$_SESSION["clients"]["birth_place"] = $clients["birth_place"];
			$_SESSION["clients"]["gender"] = $clients["gender"];

			header("location:index.php");

		} else{
			$content .= "<div class='alert alert-danger' role='alert'>
					  Code invalide!
					</div>";
		}
	}else{
		$content .= "<div class='alert alert-danger' role='alert'>
					  The name est invalide!
					</div>";
	}

}


if(isset($_GET["id_car"]) && $_GET["id_car"] == "deconnexion"){
	unset($_SESSION["clients"]);
	header("Refresh:0; url=connexion.php");
	exit();
}

if(isset($_GET["id_car"])) {
	header("location:profil.php");
	exit();
}
