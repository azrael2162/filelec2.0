<?php var_dump($_SESSION['panier']); ?><!-- Presentation des services de l'entreprise -->
 <section id="home-service" style="margin-top:20px;">
       <div class="container">
           <div class="row ">
               <div class="col-lg-4 col-md-4  col-sm-4 "  >
                   <center><i  class="fa fa-desktop fa-5x  icon-round  faa-ring animated"></i><br />
                   <h4><strong>Large Gamme de produits</strong></h4></center>
                   <p>
                     Nous vous proposons sur notre site une large gamme de choix et
                    de qualité. Nous remettons nos stocks à jour le plus régulièrement possible,
                    pour nous permettre de vous proposer des produits dernier crie.
                   </p>
               </div>
               <div class="col-lg-4 col-md-4  col-sm-4" >

                 <center> <i class="fa fa-paper-plane-o  fa-5x icon-round  faa-pulse animated"></i>
                   <h4><strong>Livraisons 7J/7</strong> </h4></center> <br />
                   <p>
                     Nous vous livrons 7J/7, Nous travaillons avec une large gamme d'entreprise
                     de livraisons et nous vous garantisons une livraison sous 3 jours (hors jours de fête).
                   </p>
               </div>
               <div class="col-lg-4 col-md-4  col-sm-4" >
                 <center>  <i class="fa fa-bullhorn  fa-5x icon-round faa-horizontal animated"></i>
                   <h4><strong>A votre disposition</strong></h4></center> <br />
                   <p>
                      Nous restons à votre disposition en cas de probleme, car la priorité et la satisfaction du client
                   </p>
               </div>
           </div>
       </div>
   </section>
      <br><br><br><br><br><br>

    <section id="home-service" style="margin-top:20px;">
      <center>
      <h5>Les nouveautées</h5><br>
      <center>
      <div class="container">
          <div class="row ">
              <?php include 'fonctionphp/page_produit.php'; ?>
          </div>
      </div>
   </section>
