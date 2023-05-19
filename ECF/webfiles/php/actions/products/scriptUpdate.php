<?php

//on démarre la session 
session_start();
//la variable $_SESSION['connected'] est définie sur TRUE pour enregister
// l'utilisateur est connecté.
$_SESSION['connected'] = TRUE;

// Connexion à la base de données:
$database = new PDO(
    'mysql:host=localhost;dbname=leboncote;charset=utf8',
    'root',
    ''
);
// si connexion à la base de données:
if (!empty($database)) {
    // Alors on exécute la suite:
    // Création des variables en récupérant les infos transmises avec la méthode POST:
    $id = $_POST["id"];
    $nom = $_POST["article"];
    $img = $_POST["img"];
    $prix = $_POST["prix"];
    $desc = $_POST["descriptions"];
    // création variable pour la requête de mise à jour l'ensemble des tuples:
    $req = "UPDATE vente SET article = '$nom', img = '$img', prix = '$prix', descriptions = '$desc'  WHERE id_article = '$id'";
    // création de la variable pour exécuter:
    $exec = $database->query($req);
    // Si l'exécution est différente de false alors ça a bien été exécuté:
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