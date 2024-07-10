<?php 
// -------------------------------------------
// Gestion de compte
// -------------------------------------------
// a) Créez une classe de gestion de compte bancaire permettant de : 
// * faire un dépôt
// * faire un retrait
// * afficher le solde d’un compte. 
// Le solde est initialisé à 0.

// Créez deux comptes (John, Marylin) que vous affectez à deux variables.

// Ecrivez le code correspondant aux opérations suivantes :
//  * dépôt de 500 euros sur le compte de John.
//  * dépôt de 1000 euros sur le compte de Marylin.
//  * retrait de 10 euros sur le compte de Marylin.
//  * affichage des soldes des deux comptes.

// b) écrire une méthode permettant à John de faire un virement de 75 euros à Marylin
// -------------------------------------------

class compteBancaire {
    // Initialisation des attributs "depot", "retrait", "solde"
    private $_solde;

    // Construct
    public function __construct($solde = 0) {
        return $this->_solde = $solde;
    }

    // Getter
    public function getSolde() {
        return $this->_solde;
    }

    // Gestion de compte - Faire un dépôt
    public function faireDepot($depot) {
        $this->_solde += $depot;
    }

    // Gestion de compte - Faire un retrait
    public function faireRetrait($retrait) {
        if ($this->_solde <= 0) {
            echo "<blockquote>Votre solde ne permet pas de retirer la somme demandée.<br><strong>Votre solde s'élève à " . $this->_solde . "€.</strong></blockquote>";
        } elseif ($retrait > $this->_solde) {
            echo "<blockquote>Votre solde est issufisant pour retirer cette somme.<br><strong>Votre solde s'élève à " . $this->_solde . "€.</strong><br>Veuillez réessayer avec une autre somme.<br></blockquote>";
        } else {
            $this->_solde -= $retrait;
        }
    }

    // Gestion de compte - Faire un virement
    public function faireVirement($virement, $destinataire) {
        if ($this->_solde <= 0) {
            echo "<blockquote>Votre solde ne permet pas de faire le virement de la somme demandée.<br><strong>Votre solde s'élève à " . $this->_solde . "€.</strong></blockquote>";
        } elseif ($virement > $this->_solde) {
            echo "<blockquote>Votre solde est issufisant pour retirer faire le virement de cette somme.<br><strong>Votre solde s'élève à " . $this->_solde . "€.</strong><br>Veuillez réessayer avec une autre somme.<br></blockquote>";
        } else {
            $this->_solde -= $virement;
            $destinataire->_solde += $virement;
        }
    }
}

$john = new compteBancaire();
$marylin = new compteBancaire();

// Compte de John
echo "<h3><u>Mouvement bancaires de John :</u></h3>";
// Affichage du compte de John
echo "<strong>Solde du compte de John : " . $john->getSolde() . "€.</strong><br>";
// John fait un dépôt de 500€
echo "John dépose 500€ sur son compte.<br>";
$john->faireDepot(500);
// Affichage du compte de John
echo "<strong>Solde du compte de John : " . $john->getSolde() . "€.</strong><br>";

echo "<br>--------------------------<br><br>";

// Compte de Marilyn
echo "<h3><u>Mouvement bancaires de Marilyn :</u></h3>";
// Affichage du compte de John
echo "<strong>Solde du compte de Marilyn : " . $marylin->getSolde() . "€.</strong><br>";
// Marilyn fait un dépôt de 1000€
echo "Marilyn dépose 1000€ sur son compte.<br>";
$marylin->faireDepot(1000);
// Affichage du compte de John
echo "<strong>Solde du compte de Marilyn : " . $marylin->getSolde() . "€.</strong><br>";
// Marilyn fait un retrait de 10€
echo "Marilyn retire 10€ sur son compte.<br>";
$marylin->faireRetrait(10);
// Affichage du compte de Marilyn
echo "<strong>Solde du compte de Marilyn : " . $marylin->getSolde() . "€.</strong><br>";

echo "<br>--------------------------<br><br>";

// Virement à un compte tiers
echo "<h3><u>Virements à un autre compte bancaire :</u></h3>";
// Affichage du solde du compte de John et de celui de Marilyn
echo "<strong>Solde du compte de John : " . $john->getSolde() . "€.</strong><br>";
echo "<strong>Solde du compte de Marilyn : " . $marylin->getSolde() . "€.</strong><br>";
// John fait un virement de 75 euros à Marylin
echo "John fait un virement de 75 euros à Marylin.<br>";
$john->faireVirement(75, $marylin);
// Affichage du solde du compte de John et de celui de Marilyn
echo "<strong>Solde du compte de John : " . $john->getSolde() . "€.</strong><br>";
echo "<strong>Solde du compte de Marilyn : " . $marylin->getSolde() . "€.</strong><br>";

echo "<br>--------------------------<br><br>";

// Tests pour vérifier les conditions du retrait
echo "<h3><u>Tests pour vérifier les conditions du retrait :</u></h3>";
// Affichage du compte de John
echo "<strong>Solde du compte de John : " . $john->getSolde() . "€.</strong><br>";
// John veut retirer 450€
echo "John retire 450€ sur son compte.<br>";
$john->faireRetrait(450);
// Affichage du compte de John
echo "<strong>Solde du compte de John : " . $john->getSolde() . "€.</strong><br>";
// John veut retirer 425€
echo "John retire 425€ sur son compte.<br>";
$john->faireRetrait(425);
// Affichage du compte de John
echo "<strong>Solde du compte de John : " . $john->getSolde() . "€.</strong><br>";
// John veut retirer 20€
echo "John retire 20€ sur son compte.<br>";
$john->faireRetrait(20);
// Affichage du compte de John
echo "<strong>Solde du compte de John : " . $john->getSolde() . "€.</strong><br>";

echo "<br>--------------------------<br><br>";

// Tests pour vérifier les conditions du virement
echo "<h3><u>Tests pour vérifier les conditions du virement :</u></h3>";
// Affichage du solde du compte de John et de celui de Marilyn
echo "<strong>Solde du compte de John : " . $john->getSolde() . "€.</strong><br>";
echo "<strong>Solde du compte de Marilyn : " . $marylin->getSolde() . "€.</strong><br>";
// John fait un virement de 75 euros à Marylin
echo "John fait un virement de 75 euros à Marylin.<br>";
$john->faireVirement(75, $marylin);
// Affichage du solde du compte de John et de celui de Marilyn
echo "<strong>Solde du compte de John : " . $john->getSolde() . "€.</strong><br>";
echo "<strong>Solde du compte de Marilyn : " . $marylin->getSolde() . "€.</strong><br>";
// Marilyn fait un virement de 1100 euros à John
echo "John fait un virement de 1100 euros à Marylin.<br>";
$marylin->faireVirement(1100, $john);
// Affichage du solde du compte de John et de celui de Marilyn
echo "<strong>Solde du compte de John : " . $john->getSolde() . "€.</strong><br>";
echo "<strong>Solde du compte de Marilyn : " . $marylin->getSolde() . "€.</strong><br>";
?>