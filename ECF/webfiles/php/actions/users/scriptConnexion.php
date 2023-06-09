
<?php

//on démarre la session 
session_start();
//la variable $_SESSION['connected'] est définie sur TRUE pour enregister
// l'utilisateur est connecté.
$_SESSION['connected'] = TRUE;

// Connexion à la base de données
$database = new PDO(
    'mysql:host=localhost;dbname=leboncote;charset=utf8',
    'root',
    ''
);
// Vérification de la connexion à la base de données
if (!empty($database)) {
    //On récupère les données transmises par le formulaire sous méthode POST et on les ajoutent en variable.
    $user_nom = $_POST["user_nom"];
    $user_password = $_POST["user_password"];
    // Requête de sélection pour vérifier les informations d'identification de l'utilisateur
    $req = "SELECT * FROM user WHERE user_nom ='$user_nom' AND user_password ='$user_password'";
    //La requête est exécutée avec la méthode query() de l'objet PDO (Qui est sous variable "$database").
    $exec = $database->query($req);
    // Récupération des résultats de la requête
    $select = $exec->fetch(PDO::FETCH_ASSOC);
    // Si les résultats correspondent (si différent de faux) on poursuit
    if ($select != false) {
        //On écrit le message suivant: //nous sommes directement transporter sur la page index.php
        echo "Vous êtes connecté";
        //nous sommes directement sur la page index.php
        header("Location: ./../../../../index.php");
        //Si les résultats ne correspondent pas on affiche:
    } else {
        echo "Mot de pass ou nom incorrect";
    }
    // Gestion de l'erreur de connexion à la base de données (si nécéssaire)
} else {
}
?>