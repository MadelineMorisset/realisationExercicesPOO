<?php
// Créer une classe calculatrice qui contiendra une fonction addition
// Faire le calcul permettant d’additionner 5 et 10.
// Ecrire le résultat

class calculatrice{

    private $_total;

    public function getTotal(){
        return $this->_total;
    }

    private function setTotal($valeur) {
        $this->_total=$valeur;
    }

    public function addition($nb1,$nb2) {
        //additionne
        $calcule=$nb1+$nb2;
        $this->setTotal($calcule);
    }

}

$objet1=new Calculatrice;
$objet1->addition(5,10);

echo $objet1->getTotal();