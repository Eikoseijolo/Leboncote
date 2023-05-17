<?php
$database = new PDO(
    'mysql:host=localhost;dbname=leboncote;charset=utf8',
    'root',
    ''
);
if (!empty($database)){ 

    $user_nom = $_POST["user_nom"];
    $user_password = $_POST["user_password"];

    $req = "SELECT * FROM user WHERE user_nom ='$user_nom' AND user_password ='$user_password'";

    $exec = $database->query($req); 
    $select = $exec->fetch(PDO::FETCH_ASSOC);



    if ($select != false){

        session_start();
        $_SESSION['connected'] = TRUE;

        header("Location: ./../../../../index.php");

    }
        else{
            echo "Nom ou mot de passe incorrecte, vous n'avez pas accès!";
        }}
        
     else{

    }


?>