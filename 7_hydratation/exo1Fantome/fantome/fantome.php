<?php 

class fantome {
    // Initialisation des attributs public "$_nom", "$_couleur", "$_velocite", "$_pointsVie", "$_enVie"
    private $_nom, $_couleur, $_velocite = 1, $_pointsVie = 10, $_enVie = true;

    // Mise en place d'un construct avec hydratation
    public function __construct(array $datas) {
        if(!empty($datas))
            $this->hydrate($datas);
    }

    // Méthode d'hydratation
    public function hydrate(array $data) {
        foreach ($data as $section => $sectionValue) {
            $hydrateMethod  = 'set'.ucfirst($section);
            if (method_exists($this, $hydrateMethod)) {
                $this->$hydrateMethod($sectionValue);
            } else {
                echo "La méthode hydrate est introuvable.";
            }
        }
    }

    // Setters
    public function setNom($nom) {
        return $this->_nom = $nom;
    }
    public function setCouleur($couleur) {
        return $this->_couleur = $couleur;
    }
    public function setVelocite($velocite) {
        return $this->_velocite = $velocite;
    }
    public function setPointsVie($pointsVie) {
        return $this->_pointsVie = $pointsVie;
    }
    public function setEnVie($enVie) {
        return $this->_enVie = $enVie;
    }

    // Getters
    public function getNom() {
        return $this->_nom;
    }
    public function getCouleur() {
        return $this->_couleur;
    }
    public function getVelocite() {
        return $this->_velocite;
    }
    public function getPointsVie() {
        return $this->_pointsVie;
    }
    public function getEnVie() {
        return $this->_enVie;
    }

    // La méthode "mangerGagnerVie" prend l'argument "$points" qui correspond aux points de vies gagnés par le fantôme
    public function mangerGagnerVie($points) {
        if ($this->_enVie) {
            if ($this->_pointsVie == 39) {
                echo "Ce fantome a déjà le nombre de points de vie maximum ! 😄<br>";
            } else {
                $this->_pointsVie += $points;
                
                if ($this->_pointsVie >= 39) {
                    $this->_pointsVie = 39;
                    echo "Félicitations !!! Ce fantome vient d'atteindre le nombre maximum de points de vie (39) ! 😄<br>";
                }
                
                $this->miseAJourVelocite();
            }
        } else {
            echo "Ce fantome est déjà mort, et ne peut donc plus gagner de points de vie ...😕<br>";
        }
    }

    // La méthode "mangerPerdreVie" prend l'argument "$points" qui correspond aux points de vies perdus par le fantôme
    public function mangerPerdreVie($points) {
        if ($this->_enVie) {
            $this->_pointsVie -= $points;

            if ($this->_pointsVie <= 0) {
                $this->_enVie = false;
                $this->_pointsVie = 0;
                echo "Ce fantome est mort ... Repose en paix petit fantôme ... 😔<br>";
            }
            
            $this->miseAJourVelocite();
        } else {
            echo "Ce fantome est déjà mort, ça s'appelle de l'acharnement ce que vous faites là ... !! 😱<br>";
        }
    }

    // Initialisation de la méthode "miseAJourVelocite"
    public function miseAJourVelocite() {
        if ($this->_pointsVie > 0 && $this->_pointsVie < 20) {
            // Si les points de vie sont strictement supérieurs à 0 et strictement inférieurs à 20, alors le fantome a une vélocité de 1 :
            $this->_velocite = 1;
        } elseif ($this->_pointsVie >= 20 && $this->_pointsVie < 30) {
            // Si les points de vie sont supérieurs ou égals à 20 et strictement inférieur à 30, alors le fantome a une vélocité de 2 :
            $this->_velocite = 2;
        } elseif ($this->_pointsVie >= 30) {
            $this->_velocite = 3;
        }
    }
}
?>