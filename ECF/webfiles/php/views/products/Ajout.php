<?php

// Connexion à la BDD
require_once('../../actions/dbconnect.php')


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ECF, création d'un site web pour vendre des objets">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Leboncote</title>
</head>
<body>
    <!-- Création du formulaire -->
    <div class="cardf">
    <div class="card-header">  
            <h1>Formulaire d'ajout de produits</h1>
</div>

    <div class="card-body">
        <form action="../../actions/products/scriptAjout.php" method="POST">
    <div class="form-group">
        <label for="Lien de l'image">Lien de l'image:</label>
        <input class="form-control" type="url" name="img" id="Lien de l'image">
    </div>
    <div class="form-group">
        <label for="Nom de l'article">Nom de l'article:</label>
        <input class="form-control" type="text" name="article" id="Nom de l'article">
     </div>
     <div class="form-group">
        <label for="Description de l'article">Description de l'article:</label>
        <input class="form-control" type="text" name="descriptions" id="description de l'article">
    </div>
    <div class="form-group">
        <label for="Prix">Prix:</label>
        <input class="form-control" type="number" name="prix" step="0.01" id="Prix">
    </div>
    <div class="form-group">
        <input type="hidden" name="id" VALUE="<?php echo $result[0]["id_article"]; ?>">
    </div>
        <button type="submit">Ajouter le produit</button>
    </form>
  
</body>
</html>


<?php
                      