<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD 4 PHP</title>
</head>
<body>
<?php

function printLines(int $lines){
    for($i = 1; $i <= $lines; $i++){
        echo str_repeat($i, $i);
        echo "<br>";
    }
}

function absoluteNumber(int $number): int {
    return ($number > 0) ? $number : -$number;
}

function biggerValue(array $array): int{
    $i = 0;
    foreach($array as $value){
        if ($value > $i){
            $i = $value;
        }
    }
    return $i;
}

function modulo(int $number1, int $number2): int {
    return $number1 - $number2 * intdiv($number1, $number2);
}

function letterApparitions(string $string, string $character) : int{
    $i = 0;
    $strsplit = str_split($string);
    foreach($strsplit as $char){
        if ($char == $character){
            $i++;
        }
    }
    return $i;
} 

function isPrime(int $number): bool{
    $divcount = 0;
    for($i = 2; $i < $number; $i++){
        if($number % $i == 0){
            return FALSE;
        }
    }

    if ($divcount == 0){
        return TRUE;
    }
}

echo absoluteNumber(-3);

?>
</body>
</html>