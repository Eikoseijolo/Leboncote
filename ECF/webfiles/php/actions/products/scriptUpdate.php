<?php
// Connection a la base de donnée:
$database = new PDO(
    'mysql:host=localhost;dbname=leboncote;charset=utf8',
    'root',
    ''
);
// si connection a la base de donnée:
if (!empty($database)) {
    // Alors on execute la suite:
    // Creation des variables en recuperant les infos transmises avec la methode POST:
    $id = $_POST["id"];
    $nom = $_POST["article"];
    $img = $_POST["img"];
    $prix = $_POST["prix"];
    $desc = $_POST["descriptions"];
    // creation variable pour la requete de mise a jour l'enssemble des tuples:
    $req = "UPDATE vente SET article = '$nom', img = '$img', prix = '$prix', descriptions = '$desc'  WHERE id_article = '$id'";
    // creation de la variable pour executer:
    $exec = $database->query($req);
    // Si l'execution est different de false alors ca a bien été executé:
    if ($exec != false) {
        echo "ok";
        // Retour a l'index.php :
        header("Location: ./../../../../index.php");
        // Sinon message d'erreur :
    } else {
        echo "erreur";
    }
}
?>