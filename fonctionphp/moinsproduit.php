<?php
session_start();
if (isset($_GET['id'])) {
  $produit=$_GET['id'];
  $qte=$_GET['qte'];

  $positionProduit = array_search($produit,  $_SESSION['panier']['libelleProduit']);

      if ($positionProduit !== false){
         $_SESSION['panier']['qteProduit'][$positionProduit] -= $qte ;
      }
}
   header('location: ?page=panier');
 ?>
