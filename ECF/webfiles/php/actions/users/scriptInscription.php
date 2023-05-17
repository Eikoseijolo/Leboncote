<?php
require_once('./../dbConnect.php');


if (!empty($database)) {

    $user_nom = $_POST["user_nom"];
    $user_password = $_POST["user_password"];

    $req = "INSERT INTO user (user_nom, user_password) VALUES ('$user_nom','$user_password')";

    $exec = $database->query($req);

    if ($exec != false) {
        echo "Inscription reussite";
        header("Location: ./../../../../index.php");
    } else {
        echo "l'inscription n'a pas fonctionné";
    }
}
?>