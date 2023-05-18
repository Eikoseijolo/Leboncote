<?php
//on importe la page dbConnect.php qui sert a se connecter a la base de donnée
require_once('./../dbConnect.php');

//On desactive la session de connection, l'utilisateur n'est plus connecté.
session_destroy();
//On envoi l'utilisateur sur la page index.php
header("Location: ./../../../../index.php");

?>