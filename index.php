<?php
session_start();

$page_title = 'Home';

@require_once('src/helpers/nav-helpers.php');
@require_once('src/helpers/auth-helpers.php');
@require_once('src/templates/bovenstukhtml.php');

// Alle data (producten) uit de database halen voor weergave op deze pagina

?>

<div class="shop-container">
   
   <!-- Moet herhaald worden voor ieder product in onze webshop -->
   <div class="product-card">
      <h1 class="product-title">Titel</h1>
      <img src="" class="product-image" alt="" />
      <div class="product-description">
         Beschrijving
      </div>
      <section>
         <!-- data-product_id is een attribuut waarin we de ID van het product opslaan
               op de iedere button moeten we kunnen klikken -->
         <button class="product-buy-btn" data-product_id="">
                  <i class="las la-cart-arrow-down"></i> Kopen
         </button>

         <div class="product-price">
                  &euro; 0.00
         </div>
      </section>
   </div>
   <!-- Einde herhaling product weergave -->
   
</div>

<?php
@require_once('src/templates/onderstukhtml.php');