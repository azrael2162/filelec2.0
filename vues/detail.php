<br>
<br>
<?php include 'fonctionphp/detail_produit.php';?>
<div class="container">
  <div class="row">
    <div class="col">
      <h6><?php echo $data1;?></h6><br>
      <img src="<?php echo $data2;?>" height="300px" width="300px" alt="">
    </div>
    <div class="col-6">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <br><br><br>
      <strong><label for="exampleSelect1">Selectionner le nombre de produits:</label></strong>
      <br>
      <select class='form-control' id='exampleSelect1' name ='nbproduit'>
        <?php
          for ($i= 1; $i<= $data5; $i++) {
           echo "<option value='$i'>$i</option>";
         }
        ?>
        </select><br><br>
        <input type="submit" name="" class="btn btn-primary" value="Valider">
      </div>
      </form>
    </div>
  </div>
  <div class="row">
  </div><br><br><br><br>
  <?php include 'fonctionphp/etat_profil.php';
  commentaire();
  ?>
</div>
