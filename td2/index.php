<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD 2 PHP</title>
</head>
<body>
<?php

$i = 0;
for($i = 0; $i < 5; $i++){
    echo "<p>", ($i +1),  "</p>";
}

$nombre1 = rand(1, 10);
$nombre2 = rand(1, 10);

while($nombre1 % 2 == 0){
    $nombre1 = rand(1, 10);
}
while($nombre2 % 2 != 0){
    $nombre2 = rand(1, 10);
}

echo $nombre1, " ",$nombre2;

$nombre3chiffres = 120;
$nombreGuess = rand(50, 140);
$compteur = 0;
while ($nombreGuess != $nombre3chiffres){
    $nombreGuess = rand(50, 140);
    $compteur++;
}

echo "<br>", "Essais : ", $compteur, " Nombre : ", $nombreGuess, ", ", $nombre3chiffres;
echo "<br>";
$j = 0;
while($j <= 10){
    echo $j, " ";
    $j++;
}
echo "<br>";
$j = 10;
while($j >= 0){
    echo $j, " ";
    $j--;
}
?>
</body>
</html>