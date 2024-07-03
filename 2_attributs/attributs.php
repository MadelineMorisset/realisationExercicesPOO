<?php 
class Car {
    // Déclaration de la propriété couleur comme privée
    public $color;
    // Pour “protéger” la couleur de la voiture, passons la en private. 
    // Nous en profiterons pour la renommer : "$_couleur" 
    // => convention pour dire : attribut = privé 
    // => Le masquage d'attributs/méthodes, s'appelle l'encapsulation.
    // private $_color;

    // Exemple : 
    // Ajoutons une fonction setCouleur, celle-ci permettra de définir la couleur de la voiture
    public function setColor($color) {
        $this->color=$color;
    }

    // et une autre fonction permettant de récupérer la couleur actuelle de la voiture
    public function getColor() {
        return $this->color;
    }
}

// On peut à présent créer une nouvelle voiture et définir sa couleur :
// $myCar = new Car();
// $myCar->setColor("Amarante");
// echo $myCar->getColor();

// Tout va bien mais en réalité, si je faisais :
$myCar = new Car;
$myCar->setColor("Amarante");
$myCar->color="sarcelle";
echo $myCar->getColor();
// L’attribut color deviendra sarcelle sans que j’ai pu contrôler cela. 
// Ex : vérifier que la couleur en est une, ou présente dans la liste des couleurs possible de cette voiture ... 
?>