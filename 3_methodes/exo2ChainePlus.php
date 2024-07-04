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
        private $_chaine="Programmation orientée objet en PHP";

        public function gras($debut) {
            return $debut . "<strong>" . $this->_chaine . "</strong><br>";
        }

        public function italique($debut) {
            return $debut . "<i>" . $this->_chaine . "</i><br>";
        }

        public function souligne($debut) {
            return $debut . "<u>" . $this->_chaine . "</u><br>";
        }

        public function majuscules($debut) {
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