<?php
echo 'Hello this is a calculator' . PHP_EOL;
{
    echo 'Insert the number' . PHP_EOL;

    $operationType = (int)fgets(STDIN);
    switch ($operationType) {
        case 1:
            echo ''
    }

    function plus($chislo1, $chislo2)
    {
        return $chislo1 + $chislo2;
    }

    function minus($chislo1, $chislo2)
    {
        return $chislo1 - $chislo2;
    }

    function multiplication($chislo1, $chislo2)
    {
        return $chislo1 * $chislo2;
    }

    function division($chislo1, $chislo2)
    {
        return $chislo1 / $chislo2;
    }

    if ($operationType === '+') {
        echo plus($chislo1, $chislo2);
    } elseif ($operationType === '-') {
        echo minus($chislo1, $chislo2);
    } elseif ($operationType === '*') {
        echo multiplication($chislo1, $chislo2);
    } elseif ($operationType === '/') {
        echo division($chislo1, $chislo2);
    }
}




