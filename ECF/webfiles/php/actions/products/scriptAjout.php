<?php

//on démarre la session 
session_start();
//la variable $_SESSION['connected'] est définie sur TRUE pour enregister
// l'utilisateur est connecté.
$_SESSION['connected'] = TRUE;

// Connexion à la BDD
require_once('./../dbconnect.php');

// Requête script ajout
if (!empty($database)) {
//On récupère les données transmises par le formulaire sous méthode POST et on les ajoutent en variable.
    $nom = $_POST["descriptions"];
    $image = $_POST["img"];
    $prix = $_POST["prix"];
    $article = $_POST["article"];
  // Requête d'insertion pour ajouter des nouvelles valeurs dans la table "vente"
    $req = "INSERT INTO vente (descriptions, img, prix, article) VALUES ('$nom', '$image', '$prix', '$article')";
    //La requête est exécutée avec la méthode query() de l'objet PDO (Qui est sous variable "$database").
    $exec = $database->query($req);
 // Vérification de l'exécution de la requête
    if ($exec != false) {
        echo "l'ajout de l'article a fonctionné";
        // Si le test de condition fonctionne on redirige l'utilisateur sur l'index.php
        header("Location: ./../../../../index.php");
    } else {
        // Sinon annulation de l'ajout
        echo "l'ajout de votre article n'a pas fonctionné";
    }
}

?>