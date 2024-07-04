<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 2 - ChainePlus</title>
</head>

<body>
    <?php 
    // Définissez la classe chainePlus qui contient :
    // * Une propriété private nommée *chaine*
    // * quatre méthodes de type public nommées gras(), italique(), souligne() et majuscules() qui retournent respectivement la chaîne stockée mise en gras, en italique, soulignée et mise en majuscules.

    // Définissez un script PHP qui crée un objet basé sur la classe chainePlus et qui l’exploite pour obtenir le résultat suivant :
    // (https://github.com/MadelineMorisset/realisationExercicesPOO/blob/main/3_methodes/attributs.png)
    // Mettre le résultat dans une page htmlisée

    class chainePlus {
        // Initalisation de l'attribut "$_chaine" avec pour valeur, la chaine de caractère "Programmation orientée objet en PHP" :
        private $_chaine="Programmation orientée objet en PHP";

        // La méthode "gras" prend l'argument "$debut" (qui correspond à la chaine de caractères envoyée comme valeur : $chaineComplete->gras("Gras : ")) :
        public function gras($debut) {
            // $debut = "Gras : ";
            // ouverture balise HTML strong
            // appel de l'attribut $_chaine
            // fermeture balise HTML strong et retour à la ligne
            return $debut . "<strong>" . $this->_chaine . "</strong><br>";
        }

        // La méthode "italique" prend l'argument "$debut" (qui correspond à la chaine de caractères envoyée comme valeur : $chaineComplete->italique("Italique : ")) :
        public function italique($debut) {
            // $debut = "Italique : ";
            // ouverture balise HTML i
            // appel de l'attribut $_chaine
            // fermeture balise HTML i et retour à la ligne
            return $debut . "<i>" . $this->_chaine . "</i><br>";
        }

        // La méthode "souligne" prend l'argument "$debut" (qui correspond à la chaine de caractères envoyée comme valeur : $chaineComplete->souligne("Souligné : ")) :
        public function souligne($debut) {
            // $debut = "Souligné : ";
            // ouverture balise HTML u
            // appel de l'attribut $_chaine
            // fermeture balise HTML u et retour à la ligne
            return $debut . "<u>" . $this->_chaine . "</u><br>";
        }

        // La méthode "majuscules" prend l'argument "$debut" (qui correspond à la chaine de caractères envoyée comme valeur : $chaineComplete->majuscules("Majuscules : ")) :
        public function majuscules($debut) {
            // $debut = "Majuscules : ";
            // usage de la fonction  strtoupper()
            // appel de l'attribut $_chaine
            return $debut.strtoupper($this->_chaine);
        }
    }

    $chaineComplete = new chainePlus;
    $result = $chaineComplete->gras("Gras : ");
    echo $result;
    $result = $chaineComplete->italique("Italique : ");
    echo $result;
    $result = $chaineComplete->souligne("Souligné : ");
    echo $result;
    $result = $chaineComplete->majuscules("Majuscules : ");
    echo $result;

    ?>
</body>

</html>