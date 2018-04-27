<?php
if (isset($_GET['type_pro'])) {
   $data =$_GET['type_pro'];
}

include 'connexion_bdd.php';
//appel de l objet de connexion_bdd
global $db;

$query="SELECT * FROM PRODUITS where id_pro = $data ";
$rows2=$db->prepare($query);
$rows2->execute();

while ($row = $rows2->fetch(PDO::FETCH_NUM)) {
 $data =  $row[0]; //id
 $data1 = $row[1]; // nom_pro
 $data2 = $row[2];//image_pro
 $data3 = $row[3];//type_pro
 $data4 = $row[4];//marque_pro
 $data5 = $row[5];//stock_pro
 $data6 = $row[6];//prixunit_pro
}
?>
