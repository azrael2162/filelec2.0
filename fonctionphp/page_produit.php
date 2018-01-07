<?php
include 'connexion_bdd.php';

global $db;

$query="SELECT * FROM PRODUITS where marque_pro='NVIDIA'";
$rows2=$db->prepare($query);
$rows2->execute();

while ($row = $rows2->fetch(PDO::FETCH_NUM)) {
 $data = $row[0]; //id
 $data1 = $row[1]; // nom_pro
 $data2 = $row[2];//image_pro
 $data3 = $row[3];//type_pro
 $data4 = $row[4];//marque_pro
 $data5 = $row[5];//stock_pro
 $data6 = $row[6];//prixunit_pro
 //recuperation des données

 echo "<div class='col-lg-4 col-md-4  col-sm-4 ' >
            <div class='card border-secondary mb-3' style='max-width: 20rem;''>
              <div class='card-header'>$data1</div>
                <div class='card-body text-secondary'>
                <img src='images/produit/gtx980.jpg' alt=''>
                <h4 class='card-title'>$data4</h4>
                  <p class='card-text'>$data6 €</p>
                </div>
              </div>
          </div>
        ";
}

?>
