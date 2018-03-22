<?php
include 'connexion_bdd.php';
function  connexion(){
  include 'connexion_bdd.php';
  if (isset($_POST['connexion'])) {
    $login=$_POST['login'];
    $password=sha1($_POST['password']);
      GLOBAL $db;
      $query2= "SELECT * FROM UTILISATEUR WHERE login='$login' AND passwordd='$password';";
      $query2ok=$db->prepare($query2);
      $query2ok->execute();
      $count=$query2ok->rowCount();

      if ($count == 1) {

      while ($row = $query2ok->fetch(PDO::FETCH_NUM)) {
      $id=$row[0];
      }
      //ouverture de la session
      session_start();
      $_SESSION['id_a']=$id;
      header('location: ?page=accueil');
    }
  }
}

function Inscription(){
  if (isset($_POST['inscription'])) {
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $mail=$_POST['email'];
    $login=$_POST['login'];
    $password=$_POST['password'];

    if ($prenom && $nom && $mail && $login && $password) {

      if (strlen($password) > 6) {

        $cryptpassw=sha1($password);//on hache le password en SHA1
        GLOBAL $db; //VAR de connexion

        $query = " INSERT INTO UTILISATEUR (uti_nom,uti_prenom,uti_email,login,passwordd,grp_id)
        VALUES('$nom','$prenom','$mail','$login','$cryptpassw',3)";

        $queryok=$db->prepare($query);
        $queryok->execute();

        $query2= "SELECT * FROM UTILISATEUR WHERE uti_nom='$nom' AND uti_prenom='$prenom';";
        $query2ok=$db->prepare($query2);
        $query2ok->execute();
        $count=$query2ok->rowCount();

        if ($count == 1) {
          while ($row = $query2ok->fetch(PDO::FETCH_NUM)) {
            $id=$row[0];
          }
          //ouverture de la session_start
          session_start();
          $_SESSION['id_a']=$id;
          header('location: ?page=accueil');
        }else {
          echo "Erreur d'insertion";
        }
      }else {
        echo "veuillez ecrire un password > à 6 caracteres";
      }
    }else {
      echo "veuillez remplir tout les champs";
    }
  }
}

function Deconnexion(){
  $_SESSION =array();
  session_destroy();
  header('location: ?page=accueil');
}

function Modife(){
  GLOBAL $db;
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
    echo "
    <label for=''><p>Nom:</p><input type='text' name='' value='$nom'></label><br>
    <label for=''><p>Prénom:</p><input type='text' name='' value='$prenom'></label><br>
    <label for=''><p>Email:</p><input type='mail' name='' value='$email'></label><br>
    <label for=''><p>Login:</p><input type='text' name='' value='$login'></label><br>
    <label for=''><p>Password:</p><input type='password' name='' placeholder='Votre '></label><br>
    ";
  }
}

function  desinscrire(){
  GLOBAL $db;
  $query="DELETE  FROM UTILISATEUR WHERE uti_id='".$_SESSION['id_a']."'";
  $queryok=$db->prepare($query);
  $queryok->execute();
  $_SESSION =array();
  session_destroy();

    header('location: ?page=accueil');
  
}
 ?>
