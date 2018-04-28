<?php
  include 'connexion_bdd.php';
function Commande(){
  GLOBAL $db;
  $query="SELECT * FROM COMMANDE WHERE uti_id='".$_SESSION['id_a']."'";
  $query2ok=$db->prepare($query);
  $query2ok->execute();
  $count=$query2ok->rowCount();

    if ($count == 1) {

        while ($row = $query2ok->fetch(PDO::FETCH_NUM)) {
        $nom=$row[1];
        $prenom=$row[2];
        $email=$row[3];
        $login=$row[4];
        $password=$row[5];
      }
    }else {
      echo "<center><img src='img/shopping-cart.png' alt=''>
      <br><br><br>
      <strong>Vous n'avaez pas encore passer de commande</strong>
      <br>
      <a href='?page=produit'>voir la liste des produits</a>
      </center>
      ";
    }
}
?>
