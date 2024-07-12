<?php 
class enfantDIluvatar {
    // Attributs
    private $_pv, $_nom, $_xp;

    // Construct
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

    // Méthode "attaquer"
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
?>