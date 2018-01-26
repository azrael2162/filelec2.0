<?php
include 'connexion_bdd.php';

global $db;

$query="SELECT * FROM PRODUITS where type_pro='Carte-Graphique' OR  type_pro='CPU' ";
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
              <div class='card-header'>$data4</div>
                <div class='card-body text-secondary'>
                <img style='height: 200px; width: 100%; display: block;' src='$data2' alt='Card image'>
                <br>
                <h4 class='card-title'>$data1</h4><br>
                <h6 class='card-title'>$data6 €</h6><br>
                <form class='' action='?detail.php' method='post'>
                  <input type='submit' name='$data' value='acheter'>
                  <input type='submit' name='$data' value='detail' >
                </form>
                </div>
              </div>
          </div>
        ";
}

?>
