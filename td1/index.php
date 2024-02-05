<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD 1 PHP</title>
</head>
<body>

<?php 
$salaire = 50000;
$nombre = 5;
$age = 19;
if($age >= 18){
    echo "Bienvenue sur notre site\n";
}else{
    echo "Trop jeune\n";
}

if(($nombre % 2) == 0){
    echo "Nombre pair\n";
}else{
    echo "Nombre impair\n";
}

if($salaire >= 50000){
    echo "Admissible pour emprunt\n";
}else{
    echo "Non admissible pour emprunt";
}

switch($age){
    case 12:
        echo "Trop jeune\n";
        break;
    case 16:
        echo "On y est presque !\n";
        break;
    case 18:
        echo "Bravo !";
        break;
    default:
        echo "Dommage";
}
?>


</body>
</html>


