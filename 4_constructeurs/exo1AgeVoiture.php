<?php 
// Adapter l’exo précédent (Méthode - exo 3 - voitures) en utilisant un constructeur
// => déjà fait (copie)

class voiture {
    public $marque, $anneeImmatriculation;
    private $_ageVehicule;

    public function __construct($marque, $anneeImmatriculation) {
        $this->marque = $marque;
        $this->anneeImmatriculation = $anneeImmatriculation;
        $this->_ageVehicule = 2024 - $anneeImmatriculation;
    }

    public function getAgeVehicule() {
        return $this->_ageVehicule;
    }
}

$voiture1 = new voiture("Jaguar", 1970);
echo "La " . $voiture1->marque . " de " . $voiture1->anneeImmatriculation . " a " . $voiture1->getAgeVehicule() . " ans.<br>";

$voiture2 = new voiture("308", 2010);
echo "La " . $voiture2->marque . " de " . $voiture2->anneeImmatriculation . " a " . $voiture2->getAgeVehicule() . " ans.";

?>