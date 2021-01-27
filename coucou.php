<?php

//nom=Doe&prenom=John&age=36

//D'abord on regarde si ces variables existent, premier exemple, on a besoin de tout !
if (!isset($_GET["nom"], $_GET["prenom"], $_GET["age"])) {
    //redirige l'utilisateur vers l'index.php
    header('Location: index.php?error=1');
}

$nom = htmlentities($_GET['nom']);
$prenom = strip_tags($_GET['prenom']);
$age = intval($_GET['age']);

if ($age > 1000){
    $age = 1000;
}
elseif ($age <= 0){
    $age = 1;
}

for ($i = 0; $i < $age; $i++){
    echo "Bonjour $prenom $nom, valeur de \$i : $i <br>";
}




/*if (isset($_GET['tab'])){
    $tab = json_decode(base64_decode($_GET['tab']));
    foreach ($tab as $valeur){
        echo "<span> $valeur </span>&nbsp;";
    }
}
*/
