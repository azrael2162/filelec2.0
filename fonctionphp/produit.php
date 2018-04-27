<?php
include 'connexion_bdd.php';

function Cpu(){
  GLOBAL $db;
  $query="SELECT * FROM PRODUITS WHERE type_pro='CPU';";
  $queryok=$db->prepare($query);
  $queryok->execute();
  $count=$queryok->rowCount();

  if ($count >= 1) {
    while ($row = $queryok->fetch(PDO::FETCH_NUM)) {
    $id=$row[0];
    $nompro=$row[1];
    $image=$row[2];
    $type=$row[3];
    $marque=$row[4];
    $stock=$row[5];
    $prix=$row[6];

    echo "
    <div class='card border-primary mb-3' width='20px'>
      <div class='card-header'>$marque</div>
      <div class='card-body'>
        <h4 class='card-title'>$nompro</h4>
        <p class='card-text'><img height='100px' src='$image'></p>
        <p class='card-text'>$prix €</p>
        <a class='thumbnail' href='?page=detail&amp;type_pro=$id'>Détail</a>
        <a class='thumbnail' href='?page=detail&amp;type_pro=$id'>Acheter</a>
      </div>
      </div>
  ";
    }
    }
}

function GPU(){
  GLOBAL $db;
  $query="SELECT * FROM PRODUITS WHERE type_pro='Carte-Graphique';";
  $queryok=$db->prepare($query);
  $queryok->execute();
  $count=$queryok->rowCount();

  if ($count >= 1) {
    while ($row = $queryok->fetch(PDO::FETCH_NUM)) {
    $id=$row[0];
    $nompro=$row[1];
    $image=$row[2];
    $type=$row[3];
    $marque=$row[4];
    $stock=$row[5];
    $prix=$row[6];

    echo "
    <div class='card border-primary mb-3' width='20px'>
      <div class='card-header'>$marque</div>
      <div class='card-body'>
        <h4 class='card-title'>$nompro</h4>
        <p class='card-text'><img height='100px' src='$image'></p>
        <p class='card-text'>$prix €</p>
        <a class='thumbnail' href='?page=detail&amp;type_pro=$id'>Détail</a>
        <a class='thumbnail' href='?page=detail&amp;type_pro=$id'>Acheter</a>
      </div>
      </div>
  ";
    }
    }
}


function CM(){
  GLOBAL $db;
  $query="SELECT * FROM PRODUITS WHERE type_pro='Carte-Mere';";
  $queryok=$db->prepare($query);
  $queryok->execute();
  $count=$queryok->rowCount();

  if ($count >= 1) {
    while ($row = $queryok->fetch(PDO::FETCH_NUM)) {
    $id=$row[0];
    $nompro=$row[1];
    $image=$row[2];
    $type=$row[3];
    $marque=$row[4];
    $stock=$row[5];
    $prix=$row[6];

    echo "
    <div class='card border-primary mb-3' width='20px'>
      <div class='card-header'>$marque</div>
      <div class='card-body'>
        <h4 class='card-title'>$nompro</h4>
        <p class='card-text'><img height='100px' src='$image'></p>
        <p class='card-text'>$prix €</p>
        <a class='thumbnail' href='?page=detail&amp;type_pro=$id'>Détail</a>
        <a class='thumbnail' href='?page=detail&amp;type_pro=$id'>Acheter</a>
      </div>
      </div>
  ";
    }
    }
}

function RAM(){
  GLOBAL $db;
  $query="SELECT * FROM PRODUITS WHERE type_pro='RAM';";
  $queryok=$db->prepare($query);
  $queryok->execute();
  $count=$queryok->rowCount();

  if ($count >= 1) {
    while ($row = $queryok->fetch(PDO::FETCH_NUM)) {
    $id=$row[0];
    $nompro=$row[1];
    $image=$row[2];
    $type=$row[3];
    $marque=$row[4];
    $stock=$row[5];
    $prix=$row[6];

    echo "
    <div class='card border-primary mb-3' width='20px'>
      <div class='card-header'>$marque</div>
      <div class='card-body'>
        <h4 class='card-title'>$nompro</h4>
        <p class='card-text'><img height='100px' src='$image'></p>
        <p class='card-text'>$prix €</p>
        <a class='thumbnail' href='?page=detail&amp;type_pro=$id'>Détail</a>
        <a class='thumbnail' href='?page=detail&amp;type_pro=$id'>Acheter</a>
      </div>
      </div>
  ";
    }
    }
}
?>
