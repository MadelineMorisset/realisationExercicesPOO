<?php 
// -------------------------------------------
// Bataille du Milieu
// -------------------------------------------
// Ecrire le scénario suivant :
// * Gandalf à 100 PV & Frodon a 2 PV
// * Gandalf attaque Frodon, et le tue en lui enlevant 10 PV
// * Gandalf gagne 1 point d'XP
// * Donner l'état de chaque personnage
// 
// Attributs : 
// * PV
// * Nom
// * Xp
// 
// Méthodes : 
// * Construct
// * getters/setters
// * Attaquer
// * etatPerso
// -------------------------------------------

class enfantDIluvatar {
    // Initialisation des attributs "pv", "nom", "xp"
    private $_pv, $_nom, $_xp;

    // Mise en place du construct
    public function __construct($pv, $nom, $xp = 0) {
        $this->setPv($pv);
        $this->setNom($nom);
        $this->setXp($xp); 
    }

    // Setters
    public function setPv($pv) {
        return $this->_pv = $pv;
    }
    public function setNom($nom) {
        return $this->_nom = $nom;
    }
    public function setXp($xp) {
        return $this->_xp = $xp;
    }

    // Getters
    public function getPv() {
        return $this->_pv;
    }
    public function getNom() {
        return $this->_nom;
    }
    public function getXp() {
        return $this->_xp;
    }

    // Mise en place de la méthode "attaquer"
    public function attaquer($pointAtk, $adversaire) {
        
    }

    // Mise en place de la méthode "etatPerso"
    public function etatPerso($vieMort) {
        // 
    }
}


echo "<h1>Bataille pour la Terre du Milieu</h1>";

// Création d'un nouvel élément de classe "enfantDIluvatar" : Gandalf
$gandalf = new enfantDIluvatar(100, "Gandalf");
echo "Un nouvel <strong>enfant d'Ilúvatar</strong> apparait en <strong>Adar</strong> ! <blockquote>Il s'appelle <strong>" . $gandalf->getNom() . "</strong>, et il a <strong>" . $gandalf->getPv() . " PV</strong>.</blockquote><br>";

// Création d'un nouvel élément de classe "enfantDIluvatar" : Frodon
$frodon = new enfantDIluvatar(2, "Frodon");
echo "Un nouvel <strong>enfant d'Ilúvatar</strong> apparait en <strong>Adar</strong> ! <blockquote>Il s'appelle <strong>" . $frodon->getNom() . "</strong>, et il a <strong>" . $frodon->getPv() . " PV</strong>.</blockquote><br>";

// Gandalf attaque Frodon, le tue en lui enlevant 10 PV, et gagne 1 d'XP
echo $gandalf->getNom() . " attaque " . $frodon->getNom() . ", et lui inflige 10 PV.";
$gandalf->attaquer(10, $frodon);

?>