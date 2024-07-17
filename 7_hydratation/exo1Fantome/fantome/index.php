<?php 
require_once 'fantome.php';

$clyde = new fantome(array("nom"=>"Clyde", "couleur"=>"Jaune"));
$dolly = new fantome(array("nom"=>"Dolly", "couleur"=>"Rose"));


echo "Points de Dolly lors de sa création : <br>";
echo "<blockquote>Points de vie de Dolly : " . $dolly->getPointsVie() . ".<br>"; // 10
echo "Vélocité de Dolly : " . $dolly->getVelocite() . ".</blockquote><br>"; // 1
echo "Dolly gagne 10 points de vie.<br>";

// Dolly prends 10 pv, sa vélocité passe à 2
$dolly->mangerGagnerVie(10);
echo "<blockquote>Points de vie de Dolly : " . $dolly->getPointsVie() . ".<br>"; // 20 
echo "Vélocité de Dolly : " . $dolly->getVelocite() . ".</blockquote><br>"; // 2
echo "Dolly gagne 10 points de vie.<br>";

// Dolly prends 10 pv, sa vélocité passe à 3 (test augmentation vélocité)
$dolly->mangerGagnerVie(10);
echo "<blockquote>Points de vie de Dolly : " . $dolly->getPointsVie() . ".<br>"; // 30
echo "Vélocité de Dolly : " . $dolly->getVelocite() . ".</blockquote><br>"; // 3
echo "Dolly gagne 10 points de vie.<br>";

// Dolly prends 10 pv (test atteinte PV max)
$dolly->mangerGagnerVie(10);
echo "<blockquote>Points de vie de Dolly : " . $dolly->getPointsVie() . ".<br>"; // 39
echo "Vélocité de Dolly : " . $dolly->getVelocite() . ".</blockquote><br>"; // 3
echo "Dolly gagne 10 points de vie.<br>";

// Dolly prends 10 pv (test PV déjà au max impossible de faire plus)
$dolly->mangerGagnerVie(5);
echo "<blockquote>Points de vie de Dolly : " . $dolly->getPointsVie() . ".<br>"; // 39
echo "Vélocité de Dolly : " . $dolly->getVelocite() . ".</blockquote><br>"; // 3

echo "-------------------------------------<br><br>";

echo "Points de Clyde lors de sa création : <br>";
echo "<blockquote>Points de vie de Clyde : " . $clyde->getPointsVie() . ".<br>"; // 10
echo "Vélocité de Clyde : " . $clyde->getVelocite() . ".</blockquote><br>"; // 1

// Clyde en perds 5
echo "Clyde perd 5 points de vie.<br>";
$clyde->mangerPerdreVie(5);
echo "<blockquote>Points de vie de Clyde : " . $clyde->getPointsVie() . ".<br>"; // 5
echo "Vélocité de Clyde : " . $clyde->getVelocite() . ".</blockquote><br>"; // 1

// Clyde en perds 10  (test atteinte PV min)
echo "Clyde perd 10 points de vie.<br>";
$clyde->mangerPerdreVie(10);
echo "<blockquote>Points de vie de Clyde : " . $clyde->getPointsVie() . ".<br>"; // 0
echo "Vélocité de Clyde : " . $clyde->getVelocite() . ".</blockquote><br>"; // 1

// Clyde en perds 5 (test PV déjà au min impossible de faire moins)
echo "Clyde perd 5 points de vie.<br>";
$clyde->mangerPerdreVie(5);
echo "<blockquote>Points de vie de Clyde : " . $clyde->getPointsVie() . ".<br>"; // 0
echo "Vélocité de Clyde : " . $clyde->getVelocite() . ".</blockquote><br>"; // 1
?>