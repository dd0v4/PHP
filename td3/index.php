<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD 3</title>
</head>
<body>
<?php

$tableau = ['infos' => ['nom' => 'Pesto', 'prenom' => 'Julia', 'age' => 30],
'films' => ['action' => ['Piège de cristal', 'Mad Max', 'Terminator', 'Matrix'],
'comédie' => ['Brice de Nice', 'Les Visiteurs', 'Le Dîner de cons', 'Neuilly sa mère !']]];

echo "nom : ", $tableau["infos"]['nom'], "<br>";
echo "prenom : ", $tableau["infos"]['prenom'], "<br>";
echo "age : ", $tableau["infos"]['age'], "<br>";
$i = 0;

for($i = 0; $i <= 3; $i++){
    echo "action : ", $tableau["films"]["action"][$i], "<br>";
}
for($i = 0; $i <= 3; $i++){
    echo "comédie : ", $tableau["films"]["comédie"][$i], "<br>";
}


?>
</body>
</html>
