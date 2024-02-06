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
$jb = false;
for($i = 0; $i < 21; $i++){
    if ($jb == false){
        echo $j, " ";
        $j++;
        if ($j == 10){
            $jb = true;
        }
    }else if($jb == true){
        echo $j, " ";
        $j--;
    }
}
?>
</body>
</html>