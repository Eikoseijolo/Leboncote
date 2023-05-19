<?php
//on importe la page dbconnect.php qui sert a se connecter à la base de données
require_once('./../dbconnect.php');

// Vérification de la connexion à la base de données
if (!empty($database)) {
    //On récupère les données transmises par le formulaire sous méthode POST et on les ajoutent en variable.
    $user_nom = $_POST["user_nom"];
    $user_password = $_POST["user_password"];
    // Requête d'insertion pour ajouter un nouvel utilisateur dans la table "user"
    $req = "INSERT INTO user (user_nom, user_password) VALUES ('$user_nom', '$user_password')";
    //La requête est exécutée avec la méthode query() de l'objet PDO (Qui est sous variable "$database").
    $exec = $database->query($req);
    // Vérification de l'exécution de la requête
    if ($exec != false) {
        //Si la requête fonctionne on envoie l'utilisateur à la page index.php
        echo "Inscription reussite";
        header("Location: ./../../../../index.php");
    } else {
        //Sinon on affiche :
        echo "l'inscription n'a pas fonctionné";
    }
}
?>