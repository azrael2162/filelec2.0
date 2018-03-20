<?php include 'fonctionphp/gestion_user.php'; ?>
<br><br><br><br><br><br>
<section id="home-service" style="margin-top:20px;">
  <div class="container">
    <center>
      <div class="card border-secondary mb-3" style="max-width: 20rem;">
        <div class="card-header"></div>
        <div class="card-body">
        <h4 class="card-title">connexion</h4>
        <form class="" action="?page=membre" method="post">
          <table>
            <tr>
              <input type="login" name="login" placeholder="login"  value=""><br>
              <input type="password" name="password" placeholder="password" value=""><br><br>
              <input type="submit" name="connexion"  value="Se connecter" class="btn btn-primary"><br>
              <?php connexion(); ?>
            </tr>
          </table>
        </form>
        <a href="?page=inscrire">S'inscrire</a>
      </div>
    <center>
  </div>
</section>
