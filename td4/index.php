<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD 4 PHP</title>
</head>
<body>
<?php

function printLines(int $lines) : str{
    for($i = 0; $i < $lines; $i++){
        echo str_repeat($i, $i);
        echo "<br>";
    }
}

function absoluteNumber(int $number): int {
    return abs($number);
}


printLines(10);
echo absoluteNumber(30);

?>
</body>
</html>