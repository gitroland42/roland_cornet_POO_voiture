<main role="main">

    <div class="container p-5">
        <div class="row">

           <div class="col-md-12 ">
              
                <a title="retour" href="index.php?controller=vehicule&action=affichage">retour menu</a> 
                
                <div class="card-header">
                     <h1>Modele : <?php echo($monVehicule->getModele()) ?></h1><br>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Marque : <?php echo($monVehicule->getMarque()) ?> </li>
                    <li class="list-group-item">Energie : <?php echo($monVehicule->getEnergie()) ?> </li>
                    <!-- <li class="list-group-item">Boite automatique : <?php echo($monVehicule->getboiteauto()) ?> </li> -->
                   
                    <li class="list-group-item">Boite automatique : <?php echo($monVehicule->getboiteauto() ? "Oui" : "Non") ?> </li>
                   
                    <li class="list-group-item">
                    
                        <?php 
                        if($monVehicule->getimage()!=""){
                        ?>
                        <img  height="250" width="338" src="<?php echo('view/telechargement/'.$monVehicule->getimage()); ?>"/>
                        <?php
                         }
                        ?>
                    </li>
                </ul>
             </div>
         </div>
    </div>
</main>