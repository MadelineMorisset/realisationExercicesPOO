<?php 
require_once 'enfantDIluvatar.php';

// Titre 
echo "<h1>Bataille du Milieu</h1>";

// Nouvelles instances
echo "<h2><u>Nouvelles Instances :</u></h2>";
// Nouvelle instance de classe "enfantDIluvatar" : Gandalf
$gandalf = new enfantDIluvatar(100, "Gandalf");
echo "Un nouvel <strong>enfant d'Ilúvatar</strong> apparait en <strong>Adar</strong> ! <blockquote>Il s'appelle <strong>" . $gandalf->getNom() . "</strong>, et il a <strong>" . $gandalf->getPv() . " PV</strong>.</blockquote><br>";

// Nouvelle instance de classe "enfantDIluvatar" : Frodon
$frodon = new enfantDIluvatar(2, "Frodon");
echo "Un nouvel <strong>enfant d'Ilúvatar</strong> apparait en <strong>Adar</strong> ! <blockquote>Il s'appelle <strong>" . $frodon->getNom() . "</strong>, et il a <strong>" . $frodon->getPv() . " PV</strong>.</blockquote><br>";

// Tests
echo "<h2><u>Tests :</u></h2>";
// Test 1
echo "<h3>Tests 1 : attaque sans mort, ni prise d'XP</h3>";
// Gandalf attaque Frodon, le tue en lui enlevant 1 PV
echo $gandalf->getNom() . " attaque " . $frodon->getNom() . ", et lui inflige 1 PV.<br>";
$gandalf->attaquer(1, $frodon);

// Test 2
echo "<h3>Tests 2 : attaque avec mort, et prise d'XP</h3>";
// Gandalf attaque Frodon, le tue en lui enlevant 10 PV, et gagne 1 d'XP
echo $gandalf->getNom() . " attaque " . $frodon->getNom() . ", et lui inflige 10 PV.<br>";
$gandalf->attaquer(10, $frodon);

// Test 3
echo "<h3>Tests 3 : perso vivant attaque un perso déjà mort</h3>";
// Gandalf attaque Frodon, le tue en lui enlevant 10 PV, et gagne 1 d'XP
echo $gandalf->getNom() . " attaque " . $frodon->getNom() . ", et lui inflige 10 PV.<br>";
$gandalf->attaquer(10, $frodon);

// Test 4
echo "<h3>Tests 4 : perso mort attaque un perso vivant</h3>";
// Frodon attaque Gandalf, en lui enlevant 10 PV
echo $frodon->getNom() . " attaque " . $gandalf->getNom() . ", et lui inflige 10 PV.<br>";
$frodon->attaquer(10, $gandalf);
?>