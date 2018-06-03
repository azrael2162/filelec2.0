
<div class="container">
  <div class="row">
    <div class="col">
      <center><h4>Votre Adresse</h4><br>
        <form class="" action="?page=valider" method="post">
          <table>
            <tr>
              <input type="text" name="pays" placeholder="Votre Pays"><br>
              <input type="text" name="adresse" placeholder="adresse"><br>
              <input type="text" name="dep" placeholder="département"><br>
              <input type="number" name="codepost" placeholder="Code postal"><br><br><br>
              <input type="submit" name="valider"  class='btn btn-primary' value="Valider">
            </tr>
          </table>
        </form>
      </center>
    </div>
    <div class="col">
      <?php include 'fonctionphp/valider.php';
      Valider();?>
    </div>
  </div>
</div>
