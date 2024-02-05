<?php
if(isset($_POST["emailin"])){
    $regex = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+$/";

    if (preg_match($regex, $_POST["emailin"])){
        echo "<p>Valide.</p>";
    }else{
        echo "<p>Caractères non valides.</p>";
    }
}

if(isset($_POST["nomin"])){
    $regex = "/^[a-zA-Z]/";

    if (preg_match($regex, $_POST["nomin"])){
        echo "<p>Valide.</p>";
    }else{
        echo "<p>Caractères non valides.</p>";
    }
}
if(isset($_POST["prenomin"])){
    $regex = "/^[a-zA-Z]/";

    if (preg_match($regex, $_POST["prenomin"])){
        echo "<p>Valide.</p>";
    }else{
        echo "<p>Caractères non valides.</p>";
    }
}
if(isset($_POST["numeroin"])){
    $regex = "/^[0-9]/";

    if (preg_match($regex, $_POST["numeroin"])){
        echo "<p>Valide.</p>";
    }else{
        echo "<p>Caractères non valides.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <style>
        form{
            display: flex;
            flex-direction: column;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD 6</title>
</head>
<body>
    <form action="" method="POST">
        <label for="emailin">Entrez votre adresse mail : </label>
        <input type="text" name="emailin" id="emailin">

        <label for="nomin">Entrez votre nom : </label>
        <input type="text" name="nomin" id="nomin">
        
        <label for="prenomin">Entrez votre prénom : </label>
        <input type="text" name="prenomin" id="prenomin">

        <label for="numeroin">Entrez votre numéro : </label>
        <input type="text" name="numeroin" id="numeroin">
        <input type="submit" value="Soumettre">

    </form>
    
</body>
</html>