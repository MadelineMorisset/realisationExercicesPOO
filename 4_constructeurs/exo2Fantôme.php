<?php 
// -------------------------------------------
// Créez une classe de générateur de fantômes.
// -------------------------------------------
// Ceux-ci ont : un nom, une couleur, une vélocité (de 1 à 3), un nombre de points de vies.

// Vous devez pouvoir en créer plusieurs, créer une fonction manger permettant d’augmenter leur nombre de points, une autre permettant de le diminuer. Attention à 0, le fantôme sera mort.

// Vélocité vaut 1 par défaut et ils ont 10 points de vie (pv) par défaut.

// Voici une séquence d’instructions à mettre en place :
//  * créer Clyde de couleur jaune et Dolly de couleur rose.
//  * Dolly prends 10 pv sa vélocité passe à 2. Clyde en perds 5, clyde en perds 10
//  * etc etc
// -------------------------------------------

class fantome {
    // Initialisation des attributs public "$nom", "$couleur", "$velocite", "$pointsVie", "$enVie"
    public $nom, $couleur, $velocite, $pointsVie, $enVie;

    // Mise en place d'un construct qui initialise les propriétés "$nom", "$couleur", "$velocite", "$pointsVie", "$enVie"
    public function __construct($nom, $couleur, $velocite = 1, $pointsVie = 10, $enVie = true) {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->velocite = $velocite;
        $this->pointsVie = $pointsVie;
        $this->enVie = $enVie;
    }

    // La méthode "mangerGagnerVie" prend l'argument "$points" qui correspond aux points de vies gagnés par le fantôme
    public function mangerGagnerVie($points) {
        if ($this->enVie) {
            if ($this->pointsVie = 39) {
                echo "Ce fantome a déjà le nombre de points de vie maximum ! 😄<br>";
            } else {
                $this->pointsVie += $points;
                if ($this->pointsVie >= 39) {
                    $this->pointsVie = 39;
                    echo "Félicitations !!! Ce fantome vient d'atteindre le nombre maximum de points de vie (39) ! 😄<br>";
                }
            }
            
            if ($this->pointsVie > 0 && $this->pointsVie < 20) {
                // Si les points de vie sont strictement supérieurs à 0 et strictement inférieurs à 20, alors le fantome a une vélocité de 1 :
                $this->velocite = 1;
            } elseif ($this->pointsVie >= 20 && $this->pointsVie < 30) {
                // Si les points de vie sont supérieurs ou égals à 20 et strictement inférieur à 30, alors le fantome a une vélocité de 2 :
                $this->velocite = 2;
            } else {
                // Si les points de vie sont supérieurs ou égals à 30, alors le fantome a une vélocité de 3 :
                $this->velocite = 3;
            }
        } else {
            echo "Ce fantome est déjà mort, et ne peut donc plus gagner de points de vie ...😕<br>";
        }
    }

    // La méthode "mangerPerdreVie" prend l'argument "$points" qui correspond aux points de vies perdus par le fantôme
    public function mangerPerdreVie($points) {
        if ($this->enVie) {
            $this->pointsVie -= $points;

            if ($this->pointsVie > 0 && $this->pointsVie < 20) {
                // Si les points de vie sont strictement supérieurs à 0 et strictement inférieurs à 20, alors le fantome a une vélocité de 1 :
                $this->velocite = 1;
            } elseif ($this->pointsVie >= 20 && $this->pointsVie < 30) {
                // Si les points de vie sont supérieurs ou égals à 20 et strictement inférieur à 30, alors le fantome a une vélocité de 2 :
                $this->velocite = 2;
            } else {
                // Si les points de vie sont supérieurs ou égals à 30, alors le fantome a une vélocité de 3 :
                $this->velocite = 3;
            }

            if ($points == 0) {
                $this->enVie = false;
                echo "Ce fantome est mort ... Repose en paix petit fantôme ... 😔<br>";
            }
        } else {
            echo "Ce fantome est déjà mort, ça s'appelle de l'acharnement ce que vous faites là ... !! 😱<br>";
        }
    }
}

$clyde = new fantome("Clyde", "Jaune");
$dolly = new fantome("Dolly", "Rose");



?>