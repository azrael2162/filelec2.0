<?php
ob_start();
ob_end_flush();
function Ajoutpanier(){
  if (!empty($_SESSION['id_a'])) {
    if (isset($_POST['valider'])) {
      $nbproduit = $_POST['nbproduit'];
      $nomproduit = $_POST['nom'];
      $prix=$_POST['prix'];
        array_push( $_SESSION['panier']['libelleProduit'],$nomproduit);
        array_push( $_SESSION['panier']['qteProduit'],$nbproduit);
        array_push( $_SESSION['panier']['prixProduit'],$prix);
        echo "<SCRIPT LANGUAGE='JavaScript'> document.location.href='?page=accueil' </SCRIPT>";
    }
  }else {
    echo "<SCRIPT LANGUAGE='JavaScript'> document.location.href='?page=membre' </SCRIPT>";
  }
}
 ?>
