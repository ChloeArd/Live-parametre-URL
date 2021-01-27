<?php

//nom=Doe&prenom=John&age=36

//D'abord on regarde si ces variables existent, premier exemple, on a besoin de tout !
if (!isset($_GET["nom"], $_GET["prenom"], $_GET["age"])) {
    //redirige l'utilisateur vers l'index.php
    header('Location: index.php?error=1');
}

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$age = $_GET['age'];

echo "Hello $prenom $nom, tu as $age ans";




/*if (isset($_GET['tab'])){
    $tab = json_decode(base64_decode($_GET['tab']));
    foreach ($tab as $valeur){
        echo "<span> $valeur </span>&nbsp;";
    }
}
*/
