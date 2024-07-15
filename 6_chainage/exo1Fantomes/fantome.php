<?php 
// Utilisation ici du fichier de correction de l'exercice "Générateur de Fantôme"

class Ghost{
    private $nom, $velocite=1, $pv=10, $couleur;

    public function __construct($nom, $couleur) {
        $this->setCouleur($couleur)
             ->setNom($nom);
    }
    

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of velocite
     */ 
    public function getVelocite()
    {
        return $this->velocite;
    }

    /**
     * Set the value of velocite
     *
     * @return  self
     */ 
    public function setVelocite($velocite)
    {
        $this->velocite = $velocite;

        return $this;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }
// functions personnelles
    public function manger($miam) {
        $this->setPv($this->getPv()+$miam);
        return $this;
    }

    public function diminuer($miam) {
        $this->setPv($this->getPv()-$miam);
        return $this;
    }

    public function isAlive(){
        if ($this->getPv()<=0) {
            return $this->getNom()." est mort.";
        }
    }
    public function info() {
        return "Mon nom est ".$this->getNom().", j'ai ".$this->getPv()."PV et ma vélocité est de ".$this->getVelocite()."<br>".$this->isAlive();
    }
}
?>