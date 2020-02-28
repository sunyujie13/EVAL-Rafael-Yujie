<?php
require_once("inc/header02.php");
$carsCarroussel = $pdo->query("SELECT * FROM cars");
?>

<section class="inner-intro bg-22 bg-overlay-black-70">
  <div class="container">
   <div class="row text-center intro-title">
     <div class="col-md-6 text-md-left d-inline-block">
       <h1 class="text-white">Notre parc </h1>
     </div>
     <div class="col-md-6 text-md-right float-right">
     </div>
   </div>
 </section>

 <section class="product-listing page-section-ptb">
   <div class="container">
    <div class="row">

     <div class="col-lg-12 col-md-12">

      <div class="row">

        <!-- INSERT NEW VEHICULES FROM HERE -->

        <!-- RENDRE CETTE PARTIE DYNAMIQUE -->
        <!-- SELECTIONNER EN BASE TOUTES LES VOITURES DISPO ET ITÉRER DANS LA CARD -->
    <?php while($detailsCars = $carsCarroussel->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class='col-lg-4'>
          <div class='car-item gray-bg text-center'>
            <div class='car-image'>
            <a href="discriptionCars.php?id_car=<?php echo $detailsCars["id_car"];?>"><img class="img-fluid" src="<?php echo $detailsCars["imgs"];?>" alt="Card image cap"></a>
              <div class='car-overlay-banner'>
                <ul>
                  <li><a href="discriptionCars.php?id_car=<?php echo $detailsCars['id_car'];?>"><i class='fa fa-link'></i></a></li>
                  <!--<li><a href='#'><i class='fa fa-shopping-cart'></i></a></li>-->
                </ul>
              </div>
            </div>
            <div class='car-list'>
              <ul class='list-inline'>
                <li><i class='fa fa-registered'><?php echo $detailsCars['year'];?></i></li>
                <li><i class='fa fa-cog'></i><?php echo $detailsCars["gearbox"];?></li>
                <li><i class='fa fa-shopping-cart'></i><?php echo $detailsCars["km"];?></li>
              </ul>
            </div>

            <div class='car-content'>
              <div class='star'><i class='fa fa-star orange-color'></i><i class='fa fa-star orange-color'></i><i class='fa fa-star orange-color'></i><i class='fa fa-star orange-color'></i><i class='fa fa-star-o orange-color'></i></div><a href='discriptionCars.php'><?php echo $detailsCars["car_brand"];?></a>
              <div class='separator'></div>
              <div class='price'>
                <span class='old-price'><?php echo $detailsCars["old_selling_price"];?>€</span>
                <span class='new-price'><?php echo $detailsCars["selling_price"];?>€</span>
              </div>
            </div>
          </div>
        </div>

      <?php } ?>

      </div>
    </div>
  </div>
</section>

<!--=================================
product-listing  -->
<?php
require_once("inc/footer.php");
?>
 
 
