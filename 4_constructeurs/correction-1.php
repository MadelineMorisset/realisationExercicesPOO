<?php
// Créer une classe permettant d’afficher l’âge d’une voiture sachant qu’on a :
// * Une jaguar de 1970
// * Une 308 de 2010

// Utiliser un attribut pour la nom de la voiture et un attribut pour son année d’immatriculation

class Voiture{
        
    private $_marque;
    private $annee;
    private $couleur="blanche";

    public function __construct($marque, $annee) {
        $this->setMarque($marque);
        $this->setAnnee($annee);
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
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

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

    public function getAge(){
        $age=date('Y')-$this->getAnnee();
        return $age;
    }
    public function infoVoiture() {
        echo "C'est une {$this->getMarque()}, créé en {$this->getAnnee()}, elle a donc {$this->getAge()} ans et elle est {$this->getCouleur()}";
    }

}

$jaguar=new Voiture("jaguar", 1950);
// $jaguar->setMarque("jaguar");
// $jaguar->setAnnee(1950);
$jaguar->infoVoiture();

$fiat=new Voiture("fiat", 1999);
// $fiat->setMarque("fiat");
// $fiat->setAnnee(1999);
$fiat->infoVoiture();