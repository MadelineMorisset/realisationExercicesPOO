<?php

class Ghost{
    private $nom;
    private $velocite=1;
    private $pv=10;
    private $couleur;

    public function __construct(array $datas) {
        $this->hydrate($datas);
    }

    public function hydrate(array $donnees)
    {
    foreach ($donnees as $key => $value)
    {
        // On récupère le nom du setter correspondant à l'attribut.
        $method = 'set'.ucfirst($key);
        // Si le setter correspondant existe.
        if (method_exists($this, $method)){
        // On appelle le setter.
        $this->$method($value);
        }
    }
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



$dolly=new Ghost(array("nom"=>"Dolly","couleur"=>"rose"));
echo $dolly->info();