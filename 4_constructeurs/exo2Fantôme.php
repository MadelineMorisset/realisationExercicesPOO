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


// ------------------------------------------------
//              Attributs "public"
// ------------------------------------------------

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
            if ($this->pointsVie == 39) {
                echo "Ce fantome a déjà le nombre de points de vie maximum ! 😄<br>";
            } else {
                $this->pointsVie += $points;
                
                if ($this->pointsVie >= 39) {
                    $this->pointsVie = 39;
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
        if ($this->enVie) {
            $this->pointsVie -= $points;

            if ($this->pointsVie <= 0) {
                $this->enVie = false;
                $this->pointsVie = 0;
                echo "Ce fantome est mort ... Repose en paix petit fantôme ... 😔<br>";
            }
            
            $this->miseAJourVelocite();
        } else {
            echo "Ce fantome est déjà mort, ça s'appelle de l'acharnement ce que vous faites là ... !! 😱<br>";
        }
    }

    // Initialisation de la méthode "miseAJourVelocite"
    public function miseAJourVelocite() {
        if ($this->pointsVie > 0 && $this->pointsVie < 20) {
            // Si les points de vie sont strictement supérieurs à 0 et strictement inférieurs à 20, alors le fantome a une vélocité de 1 :
            $this->velocite = 1;
        } elseif ($this->pointsVie >= 20 && $this->pointsVie < 30) {
            // Si les points de vie sont supérieurs ou égals à 20 et strictement inférieur à 30, alors le fantome a une vélocité de 2 :
            $this->velocite = 2;
        } elseif ($this->pointsVie >= 30) {
            $this->velocite = 3;
        }
    }
}

$clyde = new fantome("Clyde", "Jaune");
$dolly = new fantome("Dolly", "Rose");


echo "Points de Dolly lors de sa création : <br>";
echo "<blockquote>Points de vie de Dolly : " . $dolly->pointsVie . ".<br>"; // 10
echo "Vélocité de Dolly : " . $dolly->velocite . ".</blockquote><br>"; // 1
echo "Dolly gagne 10 points de vie.<br>";
// Dolly prends 10 pv, sa vélocité passe à 2
$dolly->mangerGagnerVie(10);
echo "<blockquote>Points de vie de Dolly : " . $dolly->pointsVie . ".<br>"; // 20 
echo "Vélocité de Dolly : " . $dolly->velocite . ".</blockquote><br>"; // 2
echo "Dolly gagne 10 points de vie.<br>";
// Dolly prends 10 pv, sa vélocité passe à 3
$dolly->mangerGagnerVie(10);
echo "<blockquote>Points de vie de Dolly : " . $dolly->pointsVie . ".<br>"; // 30
echo "Vélocité de Dolly : " . $dolly->velocite . ".</blockquote><br>"; // 3
echo "Dolly gagne 10 points de vie.<br>";
// Dolly prends 10 pv
$dolly->mangerGagnerVie(10);
echo "<blockquote>Points de vie de Dolly : " . $dolly->pointsVie . ".<br>"; // 39
echo "Vélocité de Dolly : " . $dolly->velocite . ".</blockquote><br>"; // 3
echo "Dolly gagne 10 points de vie.<br>";
// Dolly prends 10 pv
$dolly->mangerGagnerVie(5);
echo "<blockquote>Points de vie de Dolly : " . $dolly->pointsVie . ".<br>"; // 39
echo "Vélocité de Dolly : " . $dolly->velocite . ".</blockquote><br>"; // 3
echo "-------------------------------------<br>";

echo "Points de Clyde lors de sa création : <br>";
echo "<blockquote>Points de vie de Clyde : " . $clyde->pointsVie . ".<br>"; // 10
echo "Vélocité de Clyde : " . $clyde->velocite . ".</blockquote><br>"; // 1
// Clyde en perds 5
echo "Clyde perd 5 points de vie.<br>";
$clyde->mangerPerdreVie(5);
echo "<blockquote>Points de vie de Clyde : " . $clyde->pointsVie . ".<br>"; // 5
echo "Vélocité de Clyde : " . $clyde->velocite . ".</blockquote><br>"; // 1
// Clyde en perds 10 
echo "Clyde perd 10 points de vie.<br>";
$clyde->mangerPerdreVie(10);
echo "<blockquote>Points de vie de Clyde : " . $clyde->pointsVie . ".<br>"; // 0
echo "Vélocité de Clyde : " . $clyde->velocite . ".</blockquote><br>"; // 1
// Clyde en perds 5
echo "Clyde perd 5 points de vie.<br>";
$clyde->mangerPerdreVie(5);
echo "<blockquote>Points de vie de Clyde : " . $clyde->pointsVie . ".<br>"; // 0
echo "Vélocité de Clyde : " . $clyde->velocite . ".</blockquote><br>"; // 1


// ------------------------------------------------
//             Attributs "private"
// ------------------------------------------------

// class fantome {
//     // Initialisation des attributs public "$_nom", "$_couleur", "$_velocite", "$_pointsVie", "$_enVie"
//     private $_nom, $_couleur, $_velocite, $_pointsVie, $_enVie;

//     // Mise en place d'un construct qui initialise les propriétés "$_nom", "$_couleur", "$_velocite", "$_pointsVie", "$_enVie"
//     public function __construct($nom, $couleur, $velocite = 1, $pointsVie = 10, $enVie = true) {
//         $this->setNom($nom);
//         $this->setCouleur($couleur);
//         $this->setVelocite($velocite);
//         $this->setPointsVie($pointsVie);
//         $this->setEnVie($enVie);
//     }

//     // Setters
//     public function setNom($nom) {
//         return $this->_nom = $nom;
//     }
//     public function setCouleur($couleur) {
//         return $this->_couleur = $couleur;
//     }
//     public function setVelocite($velocite) {
//         return $this->_velocite = $velocite;
//     }
//     public function setPointsVie($pointsVie) {
//         return $this->_pointsVie = $pointsVie;
//     }
//     public function setEnVie($enVie) {
//         return $this->_enVie = $enVie;
//     }

//     // Getters
//     public function getNom() {
//         return $this->_nom;
//     }
//     public function getCouleur() {
//         return $this->_couleur;
//     }
//     public function getVelocite() {
//         return $this->_velocite;
//     }
//     public function getPointsVie() {
//         return $this->_pointsVie;
//     }
//     public function getEnVie() {
//         return $this->_enVie;
//     }

//     // La méthode "mangerGagnerVie" prend l'argument "$points" qui correspond aux points de vies gagnés par le fantôme
//     public function mangerGagnerVie($points) {
//         if ($this->_enVie) {
//             if ($this->_pointsVie == 39) {
//                 echo "Ce fantome a déjà le nombre de points de vie maximum ! 😄<br>";
//             } else {
//                 $this->_pointsVie += $points;
                
//                 if ($this->_pointsVie >= 39) {
//                     $this->_pointsVie = 39;
//                     echo "Félicitations !!! Ce fantome vient d'atteindre le nombre maximum de points de vie (39) ! 😄<br>";
//                 }
                
//                 $this->miseAJourVelocite();
//             }
//         } else {
//             echo "Ce fantome est déjà mort, et ne peut donc plus gagner de points de vie ...😕<br>";
//         }
//     }

//     // La méthode "mangerPerdreVie" prend l'argument "$points" qui correspond aux points de vies perdus par le fantôme
//     public function mangerPerdreVie($points) {
//         if ($this->_enVie) {
//             $this->_pointsVie -= $points;

//             if ($this->_pointsVie <= 0) {
//                 $this->_enVie = false;
//                 $this->_pointsVie = 0;
//                 echo "Ce fantome est mort ... Repose en paix petit fantôme ... 😔<br>";
//             }
            
//             $this->miseAJourVelocite();
//         } else {
//             echo "Ce fantome est déjà mort, ça s'appelle de l'acharnement ce que vous faites là ... !! 😱<br>";
//         }
//     }

//     // Initialisation de la méthode "miseAJourVelocite"
//     public function miseAJourVelocite() {
//         if ($this->_pointsVie > 0 && $this->_pointsVie < 20) {
//             // Si les points de vie sont strictement supérieurs à 0 et strictement inférieurs à 20, alors le fantome a une vélocité de 1 :
//             $this->_velocite = 1;
//         } elseif ($this->_pointsVie >= 20 && $this->_pointsVie < 30) {
//             // Si les points de vie sont supérieurs ou égals à 20 et strictement inférieur à 30, alors le fantome a une vélocité de 2 :
//             $this->_velocite = 2;
//         } elseif ($this->_pointsVie >= 30) {
//             $this->_velocite = 3;
//         }
//     }
// }

// $clyde = new fantome("Clyde", "Jaune");
// $dolly = new fantome("Dolly", "Rose");


// echo "Points de Dolly lors de sa création : <br>";
// echo "<blockquote>Points de vie de Dolly : " . $dolly->getPointsVie() . ".<br>"; // 10
// echo "Vélocité de Dolly : " . $dolly->getVelocite() . ".</blockquote><br>"; // 1
// echo "Dolly gagne 10 points de vie.<br>";
// // Dolly prends 10 pv, sa vélocité passe à 2
// $dolly->mangerGagnerVie(10);
// echo "<blockquote>Points de vie de Dolly : " . $dolly->getPointsVie() . ".<br>"; // 20 
// echo "Vélocité de Dolly : " . $dolly->getVelocite() . ".</blockquote><br>"; // 2
// echo "Dolly gagne 10 points de vie.<br>";
// // Dolly prends 10 pv, sa vélocité passe à 3
// $dolly->mangerGagnerVie(10);
// echo "<blockquote>Points de vie de Dolly : " . $dolly->getPointsVie() . ".<br>"; // 30
// echo "Vélocité de Dolly : " . $dolly->getVelocite() . ".</blockquote><br>"; // 3
// echo "Dolly gagne 10 points de vie.<br>";
// // Dolly prends 10 pv
// $dolly->mangerGagnerVie(10);
// echo "<blockquote>Points de vie de Dolly : " . $dolly->getPointsVie() . ".<br>"; // 39
// echo "Vélocité de Dolly : " . $dolly->getVelocite() . ".</blockquote><br>"; // 3
// echo "Dolly gagne 10 points de vie.<br>";
// // Dolly prends 10 pv
// $dolly->mangerGagnerVie(5);
// echo "<blockquote>Points de vie de Dolly : " . $dolly->getPointsVie() . ".<br>"; // 39
// echo "Vélocité de Dolly : " . $dolly->getVelocite() . ".</blockquote><br>"; // 3
// echo "-------------------------------------<br>";

// echo "Points de Clyde lors de sa création : <br>";
// echo "<blockquote>Points de vie de Clyde : " . $clyde->getPointsVie() . ".<br>"; // 10
// echo "Vélocité de Clyde : " . $clyde->getVelocite() . ".</blockquote><br>"; // 1
// // Clyde en perds 5
// echo "Clyde perd 5 points de vie.<br>";
// $clyde->mangerPerdreVie(5);
// echo "<blockquote>Points de vie de Clyde : " . $clyde->getPointsVie() . ".<br>"; // 5
// echo "Vélocité de Clyde : " . $clyde->getVelocite() . ".</blockquote><br>"; // 1
// // Clyde en perds 10 
// echo "Clyde perd 10 points de vie.<br>";
// $clyde->mangerPerdreVie(10);
// echo "<blockquote>Points de vie de Clyde : " . $clyde->getPointsVie() . ".<br>"; // 0
// echo "Vélocité de Clyde : " . $clyde->getVelocite() . ".</blockquote><br>"; // 1
// // Clyde en perds 5
// echo "Clyde perd 5 points de vie.<br>";
// $clyde->mangerPerdreVie(5);
// echo "<blockquote>Points de vie de Clyde : " . $clyde->getPointsVie() . ".<br>"; // 0
// echo "Vélocité de Clyde : " . $clyde->getVelocite() . ".</blockquote><br>"; // 1

?>