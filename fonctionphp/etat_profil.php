<?php
function commentaire(){
  if (!empty($_SESSION['id_a'])) {
    echo "<form class='' action='index.html' method='post'>
          <textarea name='name' rows='8' cols='50' placeholder='Votre commentaire'></textarea><br><br>
          <input type='submit' class='btn btn-primary' name='' value='Valider'>
          </form>";
  }else {
    echo "<a href='?page=membre'>Pour commenter,
    Vous devez vous connecter, cliquez ici!</a>";

  }
}
?>
