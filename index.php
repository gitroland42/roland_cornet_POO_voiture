<?php
    require_once('include.php');
    require_once('view/menu.php');

     
    if(empty($_GET)){
       
        header( "Location: index.php?controller=default&action=home");
    }

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        // echo("DefaultController");
        $vehiculeController = new DefaultController();
        $vehiculeController->home();
    }
     
    else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'editvehicule' && isset($_GET['id'])){
       $vehiculeController = new vehiculeController();
       $vehiculeController->editeVehicule($_GET['id']);
    }
    else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'affichage'){
        
        $vehiculeController = new vehiculeController();
        $vehiculeController->afficheVehicules();
    }
    else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'addformvehicule'){
        $vehiculeController = new vehiculeController();
        $vehiculeController->ajoutFormVehicule();
        
    }
    else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'addvehicule'){
        $vehiculeController = new vehiculeController();
        $vehiculeController->ajoutVehicule();
    }
    else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'supprvehicule' && isset($_GET['id'])){
        $vehiculeController = new vehiculeController();
        $vehiculeController->supprimeVehicule($_GET['id']);
    }
    else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'modifformvehicule' && isset($_GET['id'])){
        $vehiculeController = new vehiculeController();
        $vehiculeController->modifFormVehicule($_GET['id']);
    }
    else if($_GET['controller'] === 'vehicule' && $_GET['action'] === 'modifvehicule' && isset($_GET['id'])){
        $vehiculeController = new vehiculeController();
        $vehiculeController->modifVehicule($_GET['id']);
    }
     else {
        throw new Exception('La page demandée n\'existe pas', 404);
    }
?>