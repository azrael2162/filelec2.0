<?php
include 'fonctionphp/gestion_user.php';
?>
<?php if (!empty($_SESSION['id_a'])) {
  echo " <div class='row'>
    <div class='col'>
      <h5>Mes options</h5><br><br>
      <a href='?page=commande' class='btn btn-primary'>Vos commandes</a><br><br>
      <a href='?page=desinc' class='btn btn-primary'>Se désinscrire</a>
    </div>
    <div class='col'>
      <h5>Mes informations personelles</h5>
      ";?>
      <?php echo "
      <form class='' action='?page=gestmembre' method='post'>
      ";
        ValeurModife();
      echo "
      <br>
      <input type='submit' name='modifier' class='btn btn-primary' value='Modifier'>
      </form>
      ";modifie();
      echo "
    </div>
    <div class='col'>
    </div>
  </div>
</div>";
}else {
  header('location: ?page=membre');
} ?>

</form>
