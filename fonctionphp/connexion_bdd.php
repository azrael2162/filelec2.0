<?php
try {
  $ip="localhost";
  $bdd="bdd";
  $user="root";
  $password="toto";
    $db = new PDO("mysql:host=$ip;dbname=$bdd","$user","$password");
} catch (Exception $e) {
  echo "erreur avec mysql-server un mail à été envoyé à l'admin";
  //faire fonction envoie mail admin
}
 ?>
