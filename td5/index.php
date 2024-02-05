<?php 
if (isset($_POST["colorhex"])){
    echo "<style> body{background-color: ", $_POST["colorhex"], ";} </style>";
}

if (isset($_POST["torgb"])){
    list($r, $g, $b) = sscanf($_POST["torgb"], "#%02x%02x%02x");
    echo  $_POST["torgb"], "-> $r $g $b";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD 5</title>
</head>
<body>
    <form action="" method="POST">
        <label for="colorhexinput">Entrez une couleur HEX :</label>
        <input type="text" name="colorhex" id="colorhexinput">
        <input type="submit" value="Soumettre">
    </form>

    <form action="" method="POST">
        <label for="torgb">Entrez une couleur HEX :</label>
        <input type="text" name="torgb" id="torgb">
        <input type="submit" value="Soumettre">
    </form>

</body>
</html>