<?php
//On désactive la session de connexion, l'utilisateur n'est plus connecté.
session_destroy();
//on importe la page dbConnect.php qui sert à se connecter a la base de données
require_once('./../dbconnect.php');

//On envoie l'utilisateur sur la page index.php
header("Location: ./../../../../index.php");

?>