<?php

class Avion {
    public function decoller(){
        echo "decolle<br>";
    }

    public function atterir() {
        echo "atterissage<br>";
    }
}

$avion1=new Avion();

$avion1->decoller();
$avion1->atterir();

$avion2=new Avion;
$avion2->decoller();