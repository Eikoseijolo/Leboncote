<?php
$database = new PDO(
    'mysql:host=localhost;dbname=leboncote;charset=utf8',
    'root',
    ''
);
?>
<div class="cardf">
    <div class="card-header">
        <h1>Modification de l'article</h1>
    </div>
    <div class="card-body">
        <form action="./../../actions/products/scriptUpdate.php" method="POST">
            <div class="form-group">
                <label for="Lien de l'image">Lien de l'image:</label>
                <input class="form-control" type="url" name="urlimg" id="Lien de l'image">
            </div>
            <div class="form-group">
                <label for="Nom de l'article">Nom de l'article:</label>
                <input class="form-control" type="text" name="nomArticle" id="Nom de l'article">
            </div>
            <div class="form-group">
                <label for="Description de l'article">Description de l'article:</label>
                <input class="form-control" type="text" name="descriptionArticle" id="description de l'article">
            </div>
            <div class="form-group">
                <label for="Prix">Prix:</label>
                <input class="form-control" type="number" name="price" step="0.01" id="Prix">
            </div>
            <button type="submit">Modifier</button>
        </form>
    </div>
</div>