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
        if ($this->_pv == 0 ) {
            // Si les PV de l'attaquant = 0, alors afficher message "Ce perso est déjà mort, et ne peut donc pas attaquer l'adversaire."
            echo "<blockquote>" . $this->_nom . " a déjà quitté <strong>Arda</strong>, et ne peux donc pas attaquer " . $adversaire->_nom . ".</blockquote><br>";
            
            // Affichage de l'état de l'attaquant
            $this->etatPerso();
            //  et de l'adversaire
            $adversaire->etatPerso();
        } elseif ($adversaire->_pv == 0) {
            // Sinon, si les PV de l'adversaire = 0, alors afficher message "Ce perso est déjà mort, et ne peut donc pas être attaqué."
            echo "<blockquote>" . $adversaire->_nom . " a déjà quitté <strong>Arda</strong>, et ne peux donc plus être attaqué.</blockquote><br>";
            
            // Affichage de l'état de l'attaquant
            $this->etatPerso();
            //  et de l'adversaire
            $adversaire->etatPerso();
        } else {
            // Sinon retirer les points d'attaque aux PV de l'adversaire
            $adversaire->_pv -= $pointAtk;
            
            if ($adversaire->getPv() <= 0) {
                // Si les PV de l'adversaire <= 0, alors mettre les ses PV à 0
                $adversaire->setPv(0);
                // et l'attaquant gagne 1 d'XP
                $this->_xp += 1;
    
                // Affichage de l'état de l'attaquant
                $this->etatPerso();
                //  et de l'adversaire
                $adversaire->etatPerso();
            } else {
                // Affichage de l'état de l'attaquant
                $this->etatPerso();
                //  et de l'adversaire
                $adversaire->etatPerso();
            }
        }
    }

    // Mise en place de la méthode "etatPerso"
    public function etatPerso() {
        if ($this->_pv == 0) {
            // Si les PV du perso = 0, alors afficher message "Ce perso est déjà mort, et a rejoint le créateur" + affichage nombre PV et XP
            echo "<blockquote>" . $this->_nom . " a quitté <strong>Arda</strong>, et rejoint <strong>Ilúvatar</strong><br>(PV de " . $this->_nom . " = " . $this->_pv . ").</blockquote><br>";
        } else {
            // Sinon afficher message "Ce perso est toujours vivant" + affichage nombre PV et XP
            echo "<blockquote>" . $this->_nom . " est toujours vivant.<br>PV : " . $this->_pv . " PV<br> XP : " . $this->_xp . " XP</blockquote><br>";
        }
    }
}


echo "<h1>Bataille du Milieu</h1>";

echo "<h2><u>Nouvelles Instances :</u></h2>";
// Création d'un nouvel élément de classe "enfantDIluvatar" : Gandalf
$gandalf = new enfantDIluvatar(100, "Gandalf");
echo "Un nouvel <strong>enfant d'Ilúvatar</strong> apparait en <strong>Adar</strong> ! <blockquote>Il s'appelle <strong>" . $gandalf->getNom() . "</strong>, et il a <strong>" . $gandalf->getPv() . " PV</strong>.</blockquote><br>";
// Création d'un nouvel élément de classe "enfantDIluvatar" : Frodon
$frodon = new enfantDIluvatar(2, "Frodon");
echo "Un nouvel <strong>enfant d'Ilúvatar</strong> apparait en <strong>Adar</strong> ! <blockquote>Il s'appelle <strong>" . $frodon->getNom() . "</strong>, et il a <strong>" . $frodon->getPv() . " PV</strong>.</blockquote><br>";

echo "<h2><u>Tests :</u></h2>";
echo "<h3>Tests 1 : attaque sans mort, ni prise d'XP</h3>";
// Gandalf attaque Frodon, le tue en lui enlevant 1 PV
echo $gandalf->getNom() . " attaque " . $frodon->getNom() . ", et lui inflige 1 PV.<br>";
$gandalf->attaquer(1, $frodon);

echo "<h3>Tests 2 : attaque avec mort, et prise d'XP</h3>";
// Gandalf attaque Frodon, le tue en lui enlevant 10 PV, et gagne 1 d'XP
echo $gandalf->getNom() . " attaque " . $frodon->getNom() . ", et lui inflige 10 PV.<br>";
$gandalf->attaquer(10, $frodon);

echo "<h3>Tests 3 : perso vivant attaque un perso déjà mort</h3>";
// Gandalf attaque Frodon, le tue en lui enlevant 10 PV, et gagne 1 d'XP
echo $gandalf->getNom() . " attaque " . $frodon->getNom() . ", et lui inflige 10 PV.<br>";
$gandalf->attaquer(10, $frodon);

echo "<h3>Tests 4 : perso mort attaque un perso vivant</h3>";
// Frodon attaque Gandalf, en lui enlevant 10 PV
echo $frodon->getNom() . " attaque " . $gandalf->getNom() . ", et lui inflige 10 PV.<br>";
$frodon->attaquer(10, $gandalf);
?>