<?php
require_once("inc/header02.php");
$r = $pdo->query("SELECT * FROM admin");
$clients = $r->fetch(PDO::FETCH_ASSOC);
// var_dump($clients);
if($_POST){
	$erreur = "";
	foreach ($_POST as $indice => $valeur) {
		$_POST[$indice] = addslashes($valeur);
	}
	if($_POST['username']=="SAMIH" && $_POST['code']==="123"){
	// header("location:index.php");
	echo("<script> window.location.href = 'admin/index.php'; </script>");
	}
$content .= $erreur;
}
?>
<div style="height: 10em;"></div>
<h1 style="text-align:center;"> CONNECTEZ-VOUS!</h1>
<h3 class="font-italic" style="text-align: center">T'es ID de connexion Pseudo : SAMIH / Mdp : 123</h3>

<form method="post" action="#" style="width:50%;margin:auto;">
	<div>
		<label for="username">Username</label>
		<input type="text" name="username" placeholder="Username" id="Username" class="form-control">
	</div>
	<br>
	<div>
		<label for="mdp">Code</label>
		<input type="password" name="code" placeholder="votre Code" id="code" class="form-control">
	</div>
	<br>
	<div>
		<input type="submit" name = "submit" class="btn btn-default" value="se connecter">
	</div>
	<br>
</form>

<?php
require_once("inc/footer.php");
?>