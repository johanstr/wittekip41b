<?php
session_start();

$page_title = 'Home';

@require_once('src/helpers/nav-helpers.php');
@require_once('src/helpers/auth-helpers.php');
@require_once('src/templates/bovenstukhtml.php');
?>

<div class="shop-container">
   
   <div class="product-card">
      <h1 class="product-title">Titel</h1>
      <img src="" class="product-image" alt="" />
      <div class="product-description">
         Beschrijving
      </div>
      <section>
         <button class="product-buy-btn" data-product_id="">
                  <i class="las la-cart-arrow-down"></i> Kopen
         </button>
         <div class="product-price">
                  &euro; 0.00
         </div>
      </section>
   </div>
   
</div>

<?php
@require_once('src/templates/onderstukhtml.php');