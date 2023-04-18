<?php
session_start();

$page_title = 'Winkelwagen';

@require_once('src/helpers/nav-helpers.php');
@require_once('src/helpers/auth-helpers.php');

@include_once('src/templates/bovenstukhtml.php');
?>

<table border="1" style="border-collapse: collapse; background-color: white;">
   <thead>
      <tr>
         <th style="padding: 5px; text-align: center; background-color: black; color: white;">Product ID</th>
         <th style="padding: 5px; text-align: center; width: 12px; height: 12px; background-color: black; color: white;">Image</th>
         <th style="padding: 5px; text-align: center; background-color: black; color: white;">Product</th>
         <th style="padding: 5px; text-align: center; background-color: black; color: white;">Price</th>
         <th style="padding: 5px; text-align: center; background-color: black; color: white;">Amount</th>
         <th style="padding: 5px; text-align: center; background-color: black; color: white;">Totaal</th>
      </tr>
   </thead>
      <tbody>
         <!-- Moet herhaald worden voor alle items in de winkelwagen -->
         <tr>
            <td style="padding: 5px; text-align: center;">1</td>
            <td style="padding: 5px; text-align: center;">
               <img style="width: 40px; height: 40px;" src="" alt="" />
            </td>
            <td style="padding: 5px; text-align: left;">titel</td>
            <td style="padding: 5px; text-align: right;">&euro; 0.00</td>
            <td style="padding: 5px; text-align: center;">1</td>
            <td style="padding: 5px; text-align: right;">&euro; 0.00 ?></td>
         </tr>
         <!-- Einde herhaling items in de winkelwagen -->

         <!-- Totaal berekenen van alle items in de winkelwagen en hieronder tonen -->
         <tr>
            <td colspan="5" style="padding: 5px; text-align: right; background-color: black; color: white;">Te betalen</td>
            <td style="padding: 5px; text-align: right; background-color: black; color: red; font-weight: bold;">
               &euro; 0.00
            </td>
         </tr>
         <!-- Einde winkelwagen totaal -->
      </tbody>
</table>

<?php
@include_once('src/templates/onderstukhtml.php');