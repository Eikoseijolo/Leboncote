<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ECF, creation d'un site web pour vendre des objets">
    <link rel="stylesheet" href="./../../../css/style.css">
    <title>Leboncote vente item</title>
</head>

<div class="cardf">
    <div class="card-header">
        <h1>Connexion</h1>
    </div>
    <div class="card-body">
        <form action="./../../actions/users/scriptConnexion.php" method="POST">
            <div class="form-group">
                <label for="Nom">Nom</label>
                <input class="input" name="user_nom" type="text" placeholder="Votre nom" id="Nom">
            </div>
            <div class="form-group">
                <label for="Mot de pass">Mot de passe</label>
                <input class="input" name="user_password" type="password" placeholder="Votre Password" id="Mot de pass">
            </div>
            <button class="button">Se connecter</button>
    </div>
</div>

</head>