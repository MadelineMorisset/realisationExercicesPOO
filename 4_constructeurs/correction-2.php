<?php

class Ghost{
    private $nom;
    private $velocite=1;
    private $pv=10;
    private $couleur;

    public function __construct($nom, $couleur) {
        $this->setCouleur($couleur);
        $this->setNom($nom);
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
        // $pvActuel=$this->getPv();
        // $newVal=$pvActuel+$miam;
        // $this->setPv($newVal);
        $this->setPv($this->getPv()+$miam);
    }
    public function diminuer($miam) {
        $this->setPv($this->getPv()-$miam);
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


$clyde=new Ghost("Clyde", "jaune");
echo $clyde->info();

$dolly=new Ghost("Dolly","rose");
echo $dolly->info();
$dolly->manger(10);
$dolly->setVelocite(2);
echo $dolly->info();

$clyde->diminuer(5);
$clyde->diminuer(10);
echo $clyde->info();