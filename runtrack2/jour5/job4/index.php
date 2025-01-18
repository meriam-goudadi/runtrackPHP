<?php
function calcule($num1, $operateur, $num2) {
    switch ($operateur) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Division par zéro impossible";
            }
        case '%':
            return $num1 % $num2;
        default:
            return "Opérateur invalide";
    }
}

// Appel de la fonction
echo calcule(10, '+', 5); // Affiche 15
?>
