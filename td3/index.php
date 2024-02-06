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

foreach($tableau["infos"] as $c => $t){
    echo $c , ": " , $t , "<br>";
}
foreach($tableau["films"]["action"] as $c => $t){
    echo "action : " , $t , "<br>";
}
foreach($tableau["films"]["comédie"] as $c => $t){
    echo "comédie : " , $t , "<br>";
}


?>
</body>
</html>
