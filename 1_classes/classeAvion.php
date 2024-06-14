<?php
class avion {
    public function decoller () {
        echo "L'avion a décollé !";
    }
    public function atterire () {
        echo "L'avion a atterit !";
    }
}

$avion1 = new avion();
$avion2 = new avion();


$avion1->decoller();
$avion1->atterir();

$avion2->decoller();
$avion2->atterir();
?>