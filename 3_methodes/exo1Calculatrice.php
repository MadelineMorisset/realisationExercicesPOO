 <?php 
// Créer une classe "calculatrice" qui contiendra une méthode addition.
// Faire le calcul permettant d’additionner 5 et 10.
// Ecrire le résultat.
// Vous pouvez dans un premier temps, faire cet exercice sans attributs et sans getter/setter. 
// Puis intégrer ces concepts. 

class Calculatrice {
    // Initalisation de l'attribut "$resultat" à 0 :
    private $resultat=0;

    // La méthode "addition" prend l'argument "$nombre", puis l'ajoute à l'attribut "$resultat" :
    public function addition($nombre) {
        $this->resultat+=$nombre;
    }

    // La méthode "getResultat" retourne la valeur de l'attribut "$resultat" :
    public function getResultat() {
        return $this->resultat;
    }
}

// Création d'un nouvel élément avec la classe "Calculatrice" :
$nombre = new Calculatrice();
// Appels de la méthode "addition", pour ajouter la valeur à l'attribut "$resultat" :
$nombre->addition(5);
$nombre->addition(10);
// Affichage du résultat de l'addition :
echo $nombre->getResultat(); // Ici affiche "15"
?>