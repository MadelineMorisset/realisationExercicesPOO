<?php
// Définissez la classe chainePlus qui contient :
// * Une propriété private nommée *chaine*
// * quatre méthodes de type public nommées gras(), italique(), souligne() et majuscules() qui retournent respectivement la chaîne stockée mise en gras, en italique, soulignée et mise en majuscules.

class ChainePlus {
    //attributs
    private $_chaine;

    //getter/setter
    public function getChaine() {
        return $this->_chaine;
    }

    public function setChaine($laChaine) {
        $laChaine="<p>{$laChaine}</p>";
        $this->_chaine=$laChaine;
    }

    //methodes
    public function gras() {
        return "<bold>".$this->getChaine()."</bold>";
    }

    public function italique() {
        return "<em>{$this->getChaine()}</em>";
    }

    public function souligner() {
        return "<u>{$this->getChaine()}</u>";
    }

    public function majuscule() {
        return "<em>".strtoupper($this->getChaine())."</em>";
    }
}

$oChainePlus=new ChainePlus();
$oChainePlus->setChaine("Programmation Orientée Objet en PHP");
echo $oChainePlus->gras();
echo $oChainePlus->italique();
echo $oChainePlus->souligner();
echo $oChainePlus->majuscule();