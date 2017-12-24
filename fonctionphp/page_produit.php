<?php
include 'connexion_bdd.php';

global $bd;

$query="SELECT * FROM article where marque_pro='Gigabyte'";
$rows2=$bd->prepare($query);
$rows2->execute();

while ($row = $rows2->fetch(PDO::FETCH_NUM)) {
 print_r($row);
}
for ($i = 0; $i < 20; $i++) {

    echo "<div class='col-lg-4 col-md-4  col-sm-4 ' >
            <div class='card border-secondary mb-3' style='max-width: 20rem;''>
              <div class='card-header'>Header</div>
                <div class='card-body text-secondary'>
                <h4 class='card-title'>Secondary card title</h4>
                  <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
          </div>
        ";
}
?>
