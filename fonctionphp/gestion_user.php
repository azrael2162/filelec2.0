<?php
function verifconnexion(){
  include 'connexion_bdd.php';
  if (isset($_POST['connexion'])) {
    $login=sha1($_POST['login']);
    $password=sha1($_POST['password']);

    $query="SELECT * FROM UTILISATEUR WHERE login=$login AND password=$password ;";
    if ($res = $db->query($query)) {
      # code...
    }
  }
}

 ?>
