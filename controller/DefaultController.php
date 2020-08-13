<?php
class DefaultController{


    public function home()
    {
  
         $vehiculeController = new VehiculeController;
         $vehiculeController->afficheVehicules();
 
      
    }
   
}

?>