<?php
// 1
echo "<h1>Question 1</h1>";
for ($i = 10; $i >= 1; $i--) {
    echo $i . ' - ';
}

// 2
echo "<h1>Question 2</h1>";
$min = 1;
$max = 100;

for ($i = $min; $i <= $max; $i++) {
    if ($i % 2 == 0 ) {
    // if (0 === $i % 2) {} -- Yoda condition
    echo $i . ' - ';
}
}

echo '<h2>3. Ecrire le code permettant de trouver le PGCD de 2 nombres</h2>';

// 96 - 36 = 60;
// 60 - 36 = 24;
// 36 - 24 = 12;
// 24 - 12 = 12;
// 12 - 12 = 0;

$number1 = $cloneNumber1 = 96;
$number2 = $cloneNumber2 = 36;
$result = 0;

while ($result == 0) {
    if ($number1 > $number2) {
        $number1 = $number1 - $number2;
    } else {
        $number2 = $number2 - $number1;
    }

    if ($number2 == 0) {
        $result = $number1;
    }
}

echo 'Le PGCD de ' . $cloneNumber1. ' et '. $cloneNumber2. ' est ' . $result;
// équivaut à : echo "Le PGCD de $cloneNumber1 et $cloneNumber2 est $result";

echo '<h2>4. Coder le jeu du FizzBuzz</h2>';

for ($i = 0; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        echo 'FizzBuzz, ';
    } else if ($i % 3 == 0) {
        echo 'Fizz, ';
    } else if ($i % 5 == 0) {
        echo 'Buzz, ';
    } else {
        echo $i. ' , ';
    }
}