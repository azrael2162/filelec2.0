<?php
$nbArticles=count($_SESSION['panier']['libelleProduit']);
for ($i=0 ;$i < $nbArticles ; $i++)
			{
				$produit=htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);
				$qte=htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);
				$prix=htmlspecialchars($_SESSION['panier']['prixProduit'][$i]);
        echo "
        <div class='container'>
        <ul class='list-group'>
          <li class='list-group-item d-flex justify-content-between align-items-center'>";
					echo "<form action='?panierfinal.php' method='GET'>";
  				echo "<a href='?page=supprprod&amp;id=$produit'><img src='img/error.png' alt=''></a>";echo htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);
					echo"</form>";
					echo"<a href='?page=moins&amp;id=$produit&amp;qte=$qte'><img src='img/minus-symbol-inside-a-circle.png' alt=''></a><span class='badge badge-primary badge-pill'>Q: ";echo htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);echo"</span>";
          echo"<a href='?page=plus&amp;id=$produit'&amp;qte=$qte'><img src='img/add-button-inside-black-circle.png' alt=''></a><span class='badge badge-primary badge-pill'>";echo htmlspecialchars($_SESSION['panier']['prixProduit'][$i]);
					echo " €</span>
        </li>
      </ul>
      </div>";
			}
      $total=0;
        for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
        {
           $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
        }
				echo "<br><br>";
        echo "<br><br><center><span class='badge badge-primary badge-pill'>Total : $total €</span></center>";
				echo "<br><br>
				<center><a href='' class='btn btn-primary' name=''>Valider ma commande</a></center>
			";
			var_dump($_SESSION['panier']);
 ?>
