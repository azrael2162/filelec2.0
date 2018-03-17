<?php include 'fonctionphp/gestion_user.php'; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="?page=accueil">Filelec.ovh</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="?page=produit">Nos produits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=contact">Nous Contacter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=membre">Espace membre</a>
      </li>
    </ul>
  </div>
</nav>
<br><br><br><br><br><br>
<section id="home-service" style="margin-top:20px;">
  <div class="container">
    <center>
      <div class="card border-secondary mb-3" style="max-width: 20rem;">
        <div class="card-header"></div>
        <div class="card-body">
        <h4 class="card-title">connexion</h4>
        <form class="" action="index.html" method="post">
          <table>
            <tr>
              <input type="login" name="login" placeholder="login"  value=""><br>
              <input type="password" name="password" placeholder="password" value=""><br><br>
              <input type="submit" name="connexion"  value="Se connecter" class="btn btn-primary"><br>
            </tr>
          </table>
        </form>
        <a href="?page=inscrire">S'inscrire</a>
      </div>
    <center>
  </div>
</section>
