<?php
session_start();
if (isset($_GET['id'])) {
  $produit=$_GET['id'];
  echo $produit;
  $tmp=array();
      $tmp['libelleProduit'] = array();
      $tmp['qteProduit'] = array();
      $tmp['prixProduit'] = array();


      for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
      {
         if ($_SESSION['panier']['libelleProduit'][$i] !== $produit)
         {
            array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
            array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
            array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   header('location: ?page=panier');
/*session_start();
var_dump($_SESSION['panier']);
$tmp=array();
     $tmp['libelleProduit'] = array();
     $tmp['qteProduit'] = array();
     $tmp['prixProduit'] = array();

     for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++){
        if ($_SESSION['panier']['libelleProduit'][$i] !== $produit){
           array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
           array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
           array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
        }

     }
     //On remplace le panier en session par notre panier temporaire à jour
     $_SESSION['panier'] =  $tmp;
     //On efface notre panier temporaire
     unset($tmp);
     die();
     header('location: ../?page=panier');*/

 ?>
