
<?php
 class VehiculeController{

      
    public function afficheVehicules()
    {
       
       
       $vehiculeManager = new VehiculeManager();
       $mesVehicules= $vehiculeManager->getAllVehicules();
      
        require 'view/vehicules.php';
    }

    public function editeVehicule($id)
    {
      
        $vehiculeManager = new VehiculeManager();
        $monVehicule= $vehiculeManager->getOnevehicule($id);
     
       require 'view/vehiculdetail.php';
    }
    

    public function ajoutFormVehicule()
    {
   
        require 'view/vehiculeajout.php';
    }

    public function ajoutVehicule(){
               
        $ficImage="";
        $errors=[];

        if(empty($_POST['marque'])){
            $errors[]='erreur: la marque est obligatoire';
        }

        if(empty($_POST['modele'])){
            $errors[]='erreur: le modele est obligatoire';
        }

        // test validite image
      
        if (count($errors) ==0){ 
          
            if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0) {
              
                if ($_FILES['image']['size'] <= 1000000)
                {
                   
                    $infosfichier = pathinfo($_FILES['image']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $fichier_type = $_FILES['image']['type'];
                    $extensions_autorisees = array('image/jpg', 'image/jpeg', 'image/gif', 'image/png');
                    if (in_array($fichier_type , $extensions_autorisees))
                    {
                
                        $ficImage=uniqid().'.'.$extension_upload;
                        move_uploaded_file($_FILES['image']['tmp_name'], 'view/telechargement/'.$ficImage);

                    }else{
                        $errors[]="format de l'image incorrect";
                    }
                }else{
                    $errors[]="taille de l'image incorrect"; 
                }
            }
        }  


        if(count($errors)===0){
                $newVehicule=new Vehicule(null,$_POST['marque'],$_POST['modele'],$_POST['energie'],$_POST['boiteauto'],$ficImage);
                $vehiculeManager = new VehiculeManager();
                $vehiculeManager->addVehicule($newVehicule);

         
               header('Location: index.php?controller=vehicule&action=affichage');
        }
        else{
            require 'view/vehiculeajout.php';
        }    
    }


    public function supprimeVehicule($id)
    {
     
        $vehiculeManager = new VehiculeManager();
        $monVehicule= $vehiculeManager->getOneVehicule($id);
        $vehiculeManager->deleteVehicule($id);
    
       
        header('Location: index.php?controller=vehicule&action=affichage');
    }

    public function modifFormVehicule($id)
    {
     
        $vehiculeManager = new VehiculeManager();
        $monVehicule= $vehiculeManager->getOneVehicule($id);

  
        require 'view/vehiculemodif.php';
    }

    public function modifVehicule($id)
    {
        $vehiculeManager = new VehiculeManager();
        $monVehicule= $vehiculeManager->getOneVehicule($id);

        $errors=[];
        $ficImage="";
        if(empty($_POST['marque'])){
            $errors[]='erreur: la marque est obligatoire';
        }

        if(empty($_POST['modele'])){
            $errors[]='erreur: le modele est obligatoire';
        }

            // test validite image
                
            if (count($errors) ==0){ 
                    
                if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0) {
                   
                    if ($_FILES['image']['size'] <= 1000000)
                    {
                    
                        $infosfichier = pathinfo($_FILES['image']['name']);
                        $extension_upload = $infosfichier['extension'];
                        $fichier_type = $_FILES['image']['type'];
                        $extensions_autorisees = array('image/jpg', 'image/jpeg', 'image/gif', 'image/png');
                        if (in_array($fichier_type , $extensions_autorisees))
                        {
                           
                            $ficImage=uniqid().'.'.$extension_upload;
                            move_uploaded_file($_FILES['image']['tmp_name'], 'view/telechargement/'.$ficImage);

                        }else{
                            $errors[]="format de l'image incorrect";
                        }
                    }else{
                        $errors[]="taille de l'image incorrect"; 
                    }
                }
            }  


        if(count($errors)===0){
       

            $monVehicule = new Vehicule($id,$_POST['marque'],$_POST['modele'],$_POST['energie'],$_POST['boiteauto'],$ficImage);
            $vehiculeManager->updateVehicule($monVehicule,$ficImage);

  
            header('Location: index.php?controller=vehicule&action=affichage');
        }
        else{
            require 'view/vehiculemodif.php';
        }
    }



    }

?>