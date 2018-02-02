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
echo "
<div class='container'>
  <div class='row'>
    <div class='col'>
      <h4>$data1</h4>
        <div class='card-body text-secondary'>
          <img style='height: 250px; width: 250px; display: block;' src='$data2' alt='Card image'>
          <br>
          <h6 class='card-title'>$data6 €</h6><br>
          <form action='?page=configurator-bride_pump' method='GET'>
         <li class='span4'>
            <a class='thumbnail' href='?page=detail&amp;type_pro=$data'>Acheter</a>

        </div>
    </div>
    <div class='col'>
    <div class='container'><br><br><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div class='form-group'>
         <label for='exampleSelect1'></label>
        <select class='form-control' id='exampleSelect1'>
         ";

    for ($i=1; $i <= $data5; $i++) {
      echo "
        <option>$i</option>
      ";
    }
    echo "
    </form>
    </div>
 ";
}

echo"
</select>
</div>
  </div>";
?>
