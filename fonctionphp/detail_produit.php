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


echo "
<div class='container'>
    <div class='row justify-content-md-center'>
        <div class='col col-lg-2'>
          </div>
            <div class='col-md-auto'>
              <div class='form-group'>
               <label for='exampleSelect1'>
               </label>
               <select class='form-control' id='exampleSelect1'>
               ";
          echo"
          </div>
        <div class='col col-lg-2'>";
        for ($i=0; $i <= $data5; $i++) {
          echo "
            <option>$i</option>
          ";
        }
        echo "
      </div>
    </div>
  </div>
</select>
</div>";


?>
