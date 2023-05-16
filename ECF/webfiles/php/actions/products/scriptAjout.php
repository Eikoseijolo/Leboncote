<?php
$database = new PDO(
    'mysql:host=localhost;dbname=leboncote;charset=utf8',
    'root',
    ''
);
// FAIRE UN REQUIRE ONCE DU DBCONNECT 
if (!empty($database)) {

    $nom = $_POST["descriptions"];
    $image = $_POST["img"];
    $prix = $_POST["prix"];
    $article = $_POST["article"];

    $req = "INSERT INTO vente (descriptions, img, prix, article) VALUES ('$nom', '$image', '$prix', '$article')";

    $exec = $database->query($req);

    if ($exec != false) {
        echo "l'ajout de l'article a fonctionné";
    } else {
        echo "l'ajout de votre article n'a pas fonctionné";
    }
}

?>