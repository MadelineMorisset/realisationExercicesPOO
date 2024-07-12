<?php

class Compte {
    private $solde=0;
    private $nom;

    public function __construct($nom) {
        $this->setNom($nom);
    }


    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
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

    public function depot($montant) {
        $this->setSolde($this->getSolde()+$montant);
    }

    public function retrait($montant) {
        $this->setSolde($this->getSolde()-$montant);
    }

    public function virement($destinataire,$montant) {
        $this->retrait($montant);
        $destinataire->depot($montant);
    }

    public function infos() {
        return "Je suis {$this->getNom()} et j'ai sur mon compte : {$this->getSolde()}<br>";
    }
}

$john=new Compte("John");
$marylin=new Compte("Marylin");

$john->depot(500);
echo $john->infos();

$marylin->depot(1000);
echo $marylin->infos();

$marylin->retrait(10);
echo $marylin->infos();

$john->virement($marylin,75);

echo $marylin->infos();
echo $john->infos();
