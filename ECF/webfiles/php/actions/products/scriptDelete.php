<?php

//on démarre la session 
session_start();
//la variable $_SESSION['connected'] est définie sur TRUE pour enregister
// l'utilisateur est connecté.
$_SESSION['connected'] = TRUE;

//Connexion a la base de données
$database = new PDO(
    'mysql:host=localhost;dbname=leboncote;charset=utf8',
    'root',
    ''
);
//Vérification connexion à la base de données, si c'est OK, alors le code continu.
if (!empty($database)) {
    //L'identifiant de l'article à supprimer est récupérer à partir des données POST ($_POST["id"]).
    $id = $_POST["id"];
    //requête DELETE est pour supprimer l'article dans la table "vente" correspondant a l'article
    //Obtenu avec POST.
    $req = "DELETE FROM vente WHERE id_article=$id";
    //La requête est exécutée avec la méthode query() de l'objet PDO (Qui est sous variable "$database").
    $exec = $database->query($req);
    // Vérification de l'exécution de la requête de suppression
    if ($exec != false) {
        // si la supression est "vrai" on affiche le message suivant, mais nous sommes directement
        //envoyé sur la page index.php.
        echo "Suppression effectuée";
        header("Location: ./../../../../index.php");
    } else {
        //sinon on affiche le message suivant
        echo "Requête invalide";
    }

}



?>