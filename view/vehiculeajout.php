<form id="center" method="post" action="index.php?controller=vehicule&action=addvehicule" enctype="multipart/form-data">

    
    <label for="marque">Marque du véhicule ?</label>
    <input type="text" class="form-control" id="marque" name="marque">
     <!-- required>  -->
    

    <label for="modele">Modele du véhicule ?</label>
    <input type="text" class="form-control" id="modele" name="modele" >
     <!-- required > -->
  
   

    <label>Choisir l'énergie</label>
    <select name="energie" class="form-control" placeholder="energie" >
   
      <option value="essence">essence</option>')
      <option value="diesel">diesel</option>')
      <option value="electrique">electrique</option>')
      <option value="hybride">hybride</option>')
    </select>



    <label for="boiteauto">Boite automatique ?</label>
    <div>
        <input type="radio" id="vrai" name="boiteauto" value=1>
        <label for="vrai">Oui</label>

        <input type="radio" id="faux" name="boiteauto" value=0>
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
