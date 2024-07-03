<?php
// Créer **une classe** **avion** ainsi que **2 méthodes** 
// (**décoller** et **atterrir**).
// Chaque méthode écrit ce qu’elle est sensée faire.
// Appeler ces méthodes pour 2 avions

class avion {
    public function decoller () {
        echo "L'avion a décollé !<br>";
    }
    public function atterir () {
        echo "L'avion a atterit !<br>";
    }
}

$avion1 = new avion();
$avion2 = new avion();


$avion1->decoller();
$avion1->atterir();
echo "------------------------<br>";
$avion2->decoller();
$avion2->atterir();
?>