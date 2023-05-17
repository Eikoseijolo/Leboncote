<?php

$database = new PDO(
    'mysql:host=localhost;dbname=leboncote;charset=utf8',
    'root',
    ''
);
if (!empty($database)) {

    $id = $_POST["id"];
    $req = "DELETE FROM vente WHERE id_article=$id";
    $exec = $database->query($req);

    if ($exec != false) {
        echo "Suppression effectuée";
        header("Location: ./../../../../index.php");
    } else {
        echo "Requête invalide";
    }

}



?>