<?php include 'fonctionphp/gestion_user.php'; ?>
<br><br><br><br><br><br>
<section id="home-service" style="margin-top:20px;">
  <div class="container">
    <center>
      <div class="card border-secondary mb-3" style="max-width: 20rem;">
        <div class="card-header"></div>
        <div class="card-body">
        <h4 class="card-title">Inscription</h4>
        <form class="" action="?page=inscrire" method="post">
          <table>
            <tr>
              <input type="text" name="nom" placeholder="Nom">
              <input type="text" name="prenom" placeholder="Prénom">
              <input type="mail" name="email" placeholder="Email">
              <input type="text" name="login" placeholder="Login">
              <input type="password" name="password" placeholder="Password"><br><br>
              <input type="submit" name="inscription"  value="S'inscrire" class="btn btn-primary"><br>
              <?php Inscription(); ?>
            </tr>
          </table>
        </form>
      </div>
    <center>
  </div>
</section>
