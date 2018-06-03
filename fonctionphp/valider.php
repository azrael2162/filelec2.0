<?php include 'connexion_bdd.php'; ?>
<?php
  $nbArticles=count($_SESSION['panier']['libelleProduit']);
  for ($i=0 ;$i < $nbArticles ; $i++)
  			{
  				$produit=htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);
  				$qte=htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);
  				$prix=htmlspecialchars($_SESSION['panier']['prixProduit'][$i]);
          echo "
          <div class='container'>
          <ul class='list-group'>
            <li class='list-group-item d-flex justify-content-between align-items-center'>";

    				echo htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);
  					echo"<span class='badge badge-primary badge-pill'>Q: ";echo htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);echo"</span>";
            echo"<span class='badge badge-primary badge-pill'>";echo htmlspecialchars($_SESSION['panier']['prixProduit'][$i]);
  					echo " €</span>
          </li>
        </ul>
        </div>";
  			}
        $total=0;
          for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
          {
             $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
          }
          echo "<br><br>";
          echo "<br><br><center><span class='badge badge-primary badge-pill'>Total : $total €</span></center>";
          echo "<br><br>";


/*
fact_quantite  Int ,
fact_prix      Int ,
fact_reglement Date ,
fact_adresse   Varchar (25),
fact_codepost  char (5),
fact_ville     Varchar(25),
fact_pays      Varchar(25),
fact_nom       Varchar (25) ,
uti_id        Int ,

*/


function Valider(){
  if (isset($_POST['valider'])) {
    $today = date("Y-n-j");
  GLOBAL $qte,$produit,$prix,$nbArticles;
    $pays = $_POST['pays'];
    $adresse = $_POST['adresse'];
    $dep = $_POST['dep'];
    $codepost = $_POST['codepost'];


      $query = "INSERT INTO comporter (`qte_livr`, `id_pro`, `nom_pro`, `uti_id`, `id_livr`)
      VALUES ('$qte',1, '$produit','".$_SESSION['id_a']."',1)";
      GLOBAL $db;
      $query2=$db->prepare($query);
      $query2->execute();



  $querya= "INSERT INTO FACTURE (`fact_num`, `fact_quantite`, `fact_prix`, `fact_reglement`, `fact_adresse`, `fact_codepost`, `fact_ville`, `fact_pays`, `uti_id`)
  VALUES (NULL, '$qte', '$prix', '$today', '$adresse', '$codepost', '$dep', '$pays','".$_SESSION['id_a']."')";
  $queryb=$db->prepare($querya);
  $queryb->execute();

  //-------------------------------------
  $query = "SELECT * FROM UTILISATEUR WHERE uti_id='".$_SESSION['id_a']."'";
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

    $to  = $email;
    $subject = "Votre Commande est confirmée";
    $message = " Bonjour ! ".$nom." Votre commande à bien été envoyé !
    le montant de la commande est de $prix €";

    echo $message;
    mail($to, $subject, $message);
?><script type="text/javascript">
    alert('Votre commande est validé , verifiez vos mail.');
</script>
<?php
echo "<SCRIPT LANGUAGE='JavaScript'> document.location.href='?page=accueil'</SCRIPT>";
$_SESSION['panier']=array();
$_SESSION['panier']['libelleProduit'] = array();
$_SESSION['panier']['qteProduit'] = array();
$_SESSION['panier']['prixProduit'] = array();

}

}


}
  //" INSERT INTO UTILISATEUR (uti_nom,uti_prenom,uti_email,login,passwordd,grp_id)
  //VALUES('$nom','$prenom','$mail','$login','$cryptpassw',3)";



 ?>
