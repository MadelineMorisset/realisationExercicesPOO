<?php 
require_once 'fantome.php';

$clyde=new Ghost("Clyde", "jaune");
echo $clyde->info();

$dolly=new Ghost("Dolly","rose");
echo $dolly->info();
$dolly->manger(10)->setVelocite(2);
echo $dolly->info();

$clyde->diminuer(5)->diminuer(10);
echo $clyde->info();
?>