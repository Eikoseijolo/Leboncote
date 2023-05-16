<?php
$conn = new PDO(
    'mysql:host=localhost;dbname=leboncote;charset=utf8','root',''    
);


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ECF, creation d'un site web pour vendre des objets">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Leboncote</title>
</head>
<body>
    
</body>
</html>
    <h1>Formulaire d'ajout de produits</h1>

   <form action="../../actions/products/scriptAjout.php" method="POST">
        <input type="text" name="article" placeholder="Nom de l'article">
        <div><textarea name="descriptions"  cols="40" rows="5"  placeholder="Description de l'article"></textarea></div>
        <input type="url" name="img" placeholder="L'illustration de l'article">
        <div><input type="number" name="prix" placeholder="prix de l'article en €"></div>
        <button type="submit">Ajouter le produit</button>
    </form>
  
</body>
</html>


<?php
                      