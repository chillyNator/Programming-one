<?php

$money_zp = 25000;
$kredit = 15700;
$heals = 3000;
$last = $money_zp || $kredit || $heals;
echo  $last;

$c = 1;
echo 'Privet ti v igre ygadai shislo!' . PHP_EOL;

$secretNumber = rand(0, 100);

while (true) {
    echo 'Vvedite shislo:' . PHP_EOL;

    $printedNumber = (int) fgets(STDIN);

    if ($printedNumber > $secretNumber) {
        echo 'Vi vveli: ' . $printedNumber . ', eto sliwkom mnogo!' . PHP_EOL;
    } elseif ($printedNumber < $secretNumber) {
        echo 'Vi vveli: ' . $printedNumber . ', eto sliwkom malo!' . PHP_EOL;
    } else {
        echo 'Pozdravlaem vi win!';
        break;
    }
}
