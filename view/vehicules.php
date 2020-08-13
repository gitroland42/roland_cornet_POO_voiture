
<a href="index.php?controller=vehicule&action=addformvehicule">ajouter un vehicule</a>



  <table class="table table-dark">
      <thead>
          <tr>
          <th scope="col">id</th>
          <th scope="col">Marque</th>
          <th scope="col">Modele</th>
          <th scope="col">Energie</th>
          <th scope="col">Boite automatique</th>
          <th scope="col">Photo</th>
          </tr>
      </thead>
      <tbody>

          <?php
             
              foreach ($mesVehicules as $vehicule) {
                  ?>
                  <tr>
                  <td><?php echo($vehicule->getId()); ?></td>
                  <td><?php echo($vehicule->getMarque()); ?></td>
                  <td><?php echo($vehicule->getModele()); ?></td>
                  <td><?php echo($vehicule->getEnergie()); ?></td>
                  <td><?php echo($vehicule->getboiteauto() ? "Oui" : "Non") ?></td>
                                 
                  <?php 
                    if($vehicule->getimage()!=""){
                        ?>
                         <td><img  height="100" width="130" src="<?php echo('view/telechargement/'.$vehicule->getimage()); ?>"/></td>
                    <?php
                    }
                    else{
                        ?>
                        <td></td>
                    <?php
                    }

                   ?>
                 

                  <td>
                  <a href="index.php?controller=vehicule&action=editvehicule&id=<?php echo $vehicule->getId()?>">Detail</a>
                  </td>
                  <td>
                  <a href="index.php?controller=vehicule&action=modifformvehicule&id=<?php echo $vehicule->getId()?>">Modifier</a>
                  </td>
                  <td>
                  <a href="index.php?controller=vehicule&action=supprvehicule&id=<?php echo $vehicule->getId()?>">Supprimer</a>
                  </td>
              </tr>
           <?php 
              } 
              
             ?> 
      </tbody>
  </table>
