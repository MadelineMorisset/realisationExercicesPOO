<?php 
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
        $adversaire->_pv -= $pointAtk;

        if ($adversaire->getPv() <= 0) {
            $adversaire->setPv(0);
            $this->_xp += 1;

            $this->etatPerso();
            $adversaire->etatPerso();
        } else {
            $this->etatPerso();
            $adversaire->etatPerso();
        }
    }

    // Mise en place de la méthode "etatPerso"
    public function etatPerso() {
        if ($this->_pv == 0) {
            echo "<blockquote>" . $this->_nom . " a quitté <strong>Arda</strong>, et rejoint <strong>Ilúvatar</strong><br>(PV de " . $this->_nom . " = " . $this->_pv . ").</blockquote><br>";
        } else {
            echo "<blockquote>" . $this->_nom . " est toujours vivant.<br>PV : " . $this->_pv . " PV<br> XP : " . $this->_xp . " XP</blockquote><br>";
        }
    }
}


echo "<h1>Bataille pour la Terre du Milieu</h1>";

// Création d'un nouvel élément de classe "enfantDIluvatar" : Gandalf
$gandalf = new enfantDIluvatar(100, "Gandalf");
echo "Un nouvel <strong>enfant d'Ilúvatar</strong> apparait en <strong>Adar</strong> ! <blockquote>Il s'appelle <strong>" . $gandalf->getNom() . "</strong>, et il a <strong>" . $gandalf->getPv() . " PV</strong>.</blockquote><br>";

// Création d'un nouvel élément de classe "enfantDIluvatar" : Frodon
$frodon = new enfantDIluvatar(2, "Frodon");
echo "Un nouvel <strong>enfant d'Ilúvatar</strong> apparait en <strong>Adar</strong> ! <blockquote>Il s'appelle <strong>" . $frodon->getNom() . "</strong>, et il a <strong>" . $frodon->getPv() . " PV</strong>.</blockquote><br>";

// Gandalf attaque Frodon, le tue en lui enlevant 1 PV
echo $gandalf->getNom() . " attaque " . $frodon->getNom() . ", et lui inflige 1 PV.<br>";
$gandalf->attaquer(1, $frodon);

// Gandalf attaque Frodon, le tue en lui enlevant 10 PV, et gagne 1 d'XP
echo $gandalf->getNom() . " attaque " . $frodon->getNom() . ", et lui inflige 10 PV.<br>";
$gandalf->attaquer(10, $frodon);
?>