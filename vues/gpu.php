<?php include 'fonctionphp/produit.php'; ?>
<div class="container">
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="?page=cpu">CPU</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="?page=merecart">Carte Mére</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="?page=gpu">Carte Graphique</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="?page=hhd">HHD</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="?page=ram">RAM</a>
  </li>
</ul>
<br><br><br>

<?php GPU(); ?>
