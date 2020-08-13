<?php

    class VehiculeManager extends  DbManager{

        public function __construct()
        {
            parent::__construct();
        }



        public function getAllVehicules(){
            $vehicules=[];
          
            $query = $this->bdd->prepare('SELECT * FROM vehicule order by marque,modele');
            $query->execute();
            $fetchRes = $query->fetchAll();
            foreach($fetchRes as $ligne){
                $vehicules[]=new Vehicule($ligne['id'],$ligne['marque'],$ligne['modele'],$ligne['energie'],$ligne['boiteauto'],$ligne['image']);
            }
            return $vehicules;
        }


        public function getOneVehicule($id){
            $query = $this->bdd->prepare('SELECT * FROM vehicule WHERE id = :id');
            $query->execute(['id'=> $id]);
            $fetchRes = $query->fetch();
            $vehicule=new Vehicule($fetchRes['id'],$fetchRes['marque'],$fetchRes['modele'],$fetchRes['energie'],$fetchRes['boiteauto'],$fetchRes['image']);
           
            return $vehicule;
       } 


      
        public function addVehicule(vehicule $vehicule){
            
            $query = $this->bdd->prepare('INSERT INTO vehicule(marque, modele, energie, boiteauto, image)
            VALUES(:marque, :modele, :energie, :boiteauto, :image)');
            $query->execute([
                'marque' => $vehicule->getMarque(),
                'modele' => $vehicule->getModele(),   
                'energie' => $vehicule->getEnergie(),
                'boiteauto' => $vehicule->getBoiteauto(),
                'image' => $vehicule->getImage(),
   
            ]);
           
        }


        public function deleteVehicule($id){
            $query = $this->bdd->prepare('DELETE FROM vehicule WHERE id = :id');
            $query->execute(['id'=> $id]);
        
       } 



       public function updateVehicule(vehicule $vehicule,$image){
       
            if($image!=""){
                $query = $this->bdd->prepare('UPDATE vehicule SET marque= :marque, modele= :modele, energie= :energie, boiteauto= :boiteauto, image= :image WHERE id = :id');
            
                $query->execute([
                'marque' => $vehicule->getMarque(),
                'modele' => $vehicule->getModele(),
                'energie' => $vehicule->getEnergie(),
                'boiteauto' => $vehicule->getBoiteauto(),
                'image' =>$image,
                'id' =>$vehicule->getId(),
                ]);
            }
            else{
                $query = $this->bdd->prepare('UPDATE vehicule SET marque= :marque, modele= :modele, energie= :energie, boiteauto= :boiteauto WHERE id = :id');
           
                $query->execute([
                'marque' => $vehicule->getMarque(),
                'modele' => $vehicule->getModele(),
                'energie' => $vehicule->getEnergie(),
                'boiteauto' => $vehicule->getBoiteauto(),
               
                'id' =>$vehicule->getId(),
                ]);
            }

        }



    }



?>