<?php

$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]
    ]
];

echo $eleves[2]['nom']; // Affiche "Jean"
echo $eleves[2]['notes'][2]; // Récupère la 3ème note de Jean (6)
echo '<br />';

// Exemple pour parcourir un tableau
foreach ($eleves as $eleve) {
    echo $eleve['nom'];

// echo $eleve['notes'];

    foreach ($eleve['notes'] as $note) {
        echo $note . ', ';
    }
}

// Debuger un tableau
print_r($eleves[0]['notes']);

echo '<br />';

// Récap tableaux
$array = [5, 9, 11, 17, 18, 19, 15];

// print_r ou var_dump nous aident à debuger
print_r($array);

// récupérer le 18
echo $array[4] . '<br />';

foreach ($array as $index => $item) {
    echo $index .' : '. $item . '<br />';
}

echo '<h2> 1/ Afficher la liste de tous les éléves avec leurs notes.</h2>';

foreach ($eleves as $eleve) {
echo $eleve['nom'] . ' a eu '; 
}