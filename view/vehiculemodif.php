<form id="center" method="post" enctype="multipart/form-data" action="index.php?controller=vehicule&action=modifvehicule&id=<?php echo($monVehicule->getId());?>">

    
  
    
     <label for="marque">Marque du véhicule ?</label>
    <input type="text" class="form-control" id="marque" name="marque" value="<?php echo($monVehicule->getMarque());?>">
     <!-- required>  -->

     <label for="modele">Modele du véhicule ?</label>
    <input type="text" class="form-control" id="modele" name="modele" value="<?php echo($monVehicule->getModele());?>" >
     <!-- required > -->
  
   

    <label>Choisir l'énergie</label>
    <!-- <select name="energie" class="form-control" placeholder="energie" value="<?php echo($monVehicule->getEnergie());?>" > -->
    <select name="energie" class="form-control" placeholder="energie"> 
      <option value="essence" <?php if($monVehicule->getenergie()=='essence') { echo 'selected' ; } ?>>essence</option>
      <option value="diesel" <?php if($monVehicule->getenergie()=='diesel') { echo 'selected' ; } ?>>diesel</option>
      <option value="electrique" <?php if($monVehicule->getenergie()=='electrique') { echo 'selected' ; } ?>>electrique</option>
      <option value="hybride" <?php if($monVehicule->getenergie()=='hybride') { echo 'selected' ; } ?>>hybride</option>
    </select>



    <label for="boiteauto">Boite automatique ?</label>
    <div>
           
        <input type="radio" id="vrai" name="boiteauto" value="1" <?php if($monVehicule->getboiteauto()=='1') { echo 'checked="checked"' ; } ?>>
        <label for="vrai">Oui</label>

        <input type="radio" id="faux" name="boiteauto" value="0" <?php if($monVehicule->getboiteauto()=='0') { echo 'checked="unchecked"' ; } ?>>
        <label for="faux">Non</label>
                 
    </div>

    <div>
    <label for="image">Selectionner une photo</label>    
    <input type="file" name="image"> <br><br>
    </div>


    <input class="btn btn-success" type="submit" value="valider">
    <?php
      if(isset($errors) && count($errors) != 0){
            
        foreach ( $errors as $error){
          echo('<div class="error">'.$error.'</div>');
       }
      }
    ?>


  </form>
