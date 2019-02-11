<?php

/**
 * Afficher les tables de multiplication de 0 à 10
 */

 echo '1 x 1 = 1';
 echo '1 x 2 = 2';
 echo '1 x 3 = 3';
 echo '1 x 4 = 4';
 echo '1 x 5 = 5';
 echo '1 x 6 = 6';
 echo '1 x 7 = 7';
 echo '1 x 8 = 8';
 echo '1 x 9 = 9';
 echo '1 x 10 = 10' . '<br/>';

$result=0;
 for ($i = 1; $i <= 10; $i++) {
     echo '<br/>';
     for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo $i . ' x ' . $j . ' = ' . $result . '<br/>'; 
    }
    echo '<br/>';
}


/** Carré de Table de multiplication
 * 
*/

echo PHP_EOL; // Equivaut à un retour chariot
echo '<table align="center" border="1" style="border-collapse: collapse">'.PHP_EOL;

// Légende du tableau
echo '<thead><tr>';
echo '<td align="center" style="width: 20px; background-color: lightgrey">x</td>';
for ($z = 0; $z <= 10; $z++) {
    $color = ($z % 2) ? 'lightgrey' : 'white';
    /* if ($z % 2) {
        // Pair
        $color = 'lightgrey';
    } else {
        // Pas pair
        $color = 'white';
    } */
    echo '<td align="center" style="width: 20px; background-color: '.$color.'">' .$z. '</td>';
}
echo '</tr><thead>';

for ($i = 0; $i <= 10; $i++) {
    $color = ($z % 2) ? 'lightgrey' : 'white';
    $direction = ($color === 'lightgrey') ? 1 : 0; // Sens du background-color
    echo "\t<tr>"; // "\t" génère une tabulation
    echo '<td align="center" style="width: 20px; background-color: '.$color.'">' .$i. '</td>';
    for ($j = 0; $j <= 10; $j++) {
        echo '<td align="center" style="width: 20px; background-color: '.$color.'">' .$i * $j. '</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>






