<?php
$database = new PDO(
    'mysql:host=localhost;dbname=leboncote;charset=utf8',
    'root',
    ''
);
if (!empty($database)) {

    $user_nom = $_POST["user_nom"];
    $user_password = $_POST["user_password"];

    $req = "SELECT * FROM user WHERE user_nom ='$user_nom' AND user_password ='$user_password'";

    $exec = $database->query($req);

    $select = $exec->fetch(PDO::FETCH_ASSOC);

    if ($select != false) {
        echo "Vous etes connecter";
        header("Location: ./../../../../index.php");
        session_start();
        $_SESSION['connected'] = TRUE;
    } else {
        echo "Mot de pass ou nom incorrect";
    }
} else {
}
?>