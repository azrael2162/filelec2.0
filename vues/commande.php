<?php
include 'fonctionphp/commande.php';
?>
<?php
  echo " <div class='row'>
    <div class='col'>
      <h5>Mes options</h5><br><br>
      <a href='?page=gestmembre' class='btn btn-primary'>Vos informations</a><br><br>
      <a href='?page=desinc' class='btn btn-primary'>Se désinscrire</a>
    </div>
    <div class='col'>
      <h5>Mes informations sur les commandes</h5>
      ";?>
      <br><br>
      <?php
      Commande();
      echo "
    </div>
    <div class='col'>
    </div>
  </div>
</div>";
 ?>

</form>
