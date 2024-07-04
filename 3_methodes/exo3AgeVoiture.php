<?php 
// Créer une classe permettant d’afficher l’âge d’une voiture sachant qu’on a :
// * Une jaguar de 1970
// * Une 308 de 2010

// Utiliser un attribut pour la nom de la voiture et un attribut pour son année d’immatriculation

class voiture {
    // Initialisation des attributs public "$marque","$anneeImmatriculation"
    public $marque, $anneeImmatriculation;
    // Initialisation de l'attribut private "$_ageVehicule"
    private $_ageVehicule;

    // Mise en place d'un construct qui initialise les propriétés "marque", "anneeImmatriculation", et calculer l'âge de la voiture
    public function __construct($marque, $anneeImmatriculation) {
        $this->marque = $marque;
        $this->anneeImmatriculation = $anneeImmatriculation;
        $this->_ageVehicule = 2024 - $anneeImmatriculation;
    }

    // "getAgeVehicule" retourne la valeur de l'attribut "$_ageVehicule"
    public function getAgeVehicule() {
        return $this->_ageVehicule;
    }
}

// Création d'un nouvel élément avec la classe "voiture" :
$voiture1 = new voiture("Jaguar", 1970);
// Affichage avec echo de la marque de la voiture, de son année d'immatriculation, et de son age avec l'appel à la méthode getAgeVehicule
echo "La " . $voiture1->marque . " de " . $voiture1->anneeImmatriculation . " a " . $voiture1->getAgeVehicule() . " ans.<br>";

// Création d'un nouvel élément avec la classe "voiture" :
$voiture2 = new voiture("308", 2010);
// Affichage avec echo de la marque de la voiture, de son année d'immatriculation, et de son age avec l'appel à la méthode getAgeVehicule
echo "La " . $voiture2->marque . " de " . $voiture2->anneeImmatriculation . " a " . $voiture2->getAgeVehicule() . " ans.";

?>