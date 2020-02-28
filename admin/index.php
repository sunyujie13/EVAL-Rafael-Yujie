
<?php
require_once("inc/headerAdmin.php");
require_once("inc/init-admin.php");
// var_dump($pdo);

?>
<!-- titre -->
<h1 style="text-align: center">SALUT SAMIH !</h1>

<!-- form -->
<form method="get" action="#" id="form" style="width:50%;margin:auto;">
	<input type="text" class="form-control" name="facture" id="facture" placeholder="Facture"><br>
	<input class="btn btn-dark" type="submit" name="submit" value="Check" id="submit">
	<input class="btn btn-dark" type="submit" name="checktout" value="Check Tout" id="checktout">
</form>

<br>
<div>
	<table class="table" method="get">
	<thead>
		<tr>
			<th scope="col">Id_invoice</th>
			<th scope="col">First_name</th>
			<th scope="col">Last_name</th>
			<th scope="col">Address</th>
			<th scope="col">Postal_code</th>
			<th scope="col">City</th>
			<th scope="col">Facture</th>
			<th scope="col">Creer annoce Boncoin</th>
		</tr>
	</thead>
	<tbody id="resultat" method="get">
	</tbody>
	</table>
</div>
<a href=""></a>
<!-- javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="js/app.js"></script>
<script src="js/appTout.js"></script>
<script src="js/boncoin.js"></script>

