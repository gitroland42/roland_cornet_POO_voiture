<?php
    class Vehicule{
        private $id;
        private $marque;
        private $modele;
        private $energie;
        private $boiteauto;
        private $image;

        public function __construct($id=null, $marque=null, $modele=null, $energie=null, $boiteauto=null, $image=null)
        {
            $this->id = $id;
            $this->marque = $marque;
            $this->modele = $modele;
            $this->energie = $energie;
            $this->boiteauto = $boiteauto;
            $this->image = $image;

        }

        


        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of marque
         */ 
        public function getMarque()
        {
                return $this->marque;
        }

        /**
         * Set the value of marque
         *
         * @return  self
         */ 
        public function setMarque($marque)
        {
                $this->marque = $marque;

                return $this;
        }

        /**
         * Get the value of modele
         */ 
        public function getModele()
        {
                return $this->modele;
        }

        /**
         * Set the value of modele
         *
         * @return  self
         */ 
        public function setModele($modele)
        {
                $this->modele = $modele;

                return $this;
        }

        /**
         * Get the value of energie
         */ 
        public function getEnergie()
        {
                return $this->energie;
        }

        /**
         * Set the value of energie
         *
         * @return  self
         */ 
        public function setEnergie($energie)
        {
                $this->energie = $energie;

                return $this;
        }

        /**
         * Get the value of boiteauto
         */ 
        public function getBoiteauto()
        {
                return $this->boiteauto;
        }

        /**
         * Set the value of boiteauto
         *
         * @return  self
         */ 
        public function setBoiteauto($boiteauto)
        {
                $this->boiteauto = $boiteauto;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }
    }

?>
