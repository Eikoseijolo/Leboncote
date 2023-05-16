<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ECF, creation d'un site web pour vendre des objets">
    <link rel="stylesheet" href="./webfiles/css/style.css">
    <title>Leboncote</title>
</head>

<body>
    <?php
    $database = new PDO(
        'mysql:host=localhost;dbname=leboncote;charset=utf8',
        'root',
        ''
    );
    // FAIRE UN REQUIRE ONCE DU DBCONNECT 
    if (!empty($database)) {
        ?>
        <header>
            <nav>
                <p>Leboncote</p>
                <ul>
                    <li><a href="./webfiles/php/views/products/ajout.php">Ajouter</a></li>
                    <li><a href="./webfiles/php/views/products/formUpdate.php">Modifier</a></li>
                    <li><a href="#">Suprimer</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Nos ventes</h1>

            <form action="./webfiles/php/views/products/Ajout.php" method="POST">
                <button type="submit">Ajouter un produit</button>
            </form>
            <?php
    }
    ?>
        <div class="container">
            <?php
            $exec = $database->query("SELECT * FROM vente");
            if ($exec != false):

                $res = $exec->fetchAll(PDO::FETCH_ASSOC);

                foreach ($res as $tuple):
                    ?>
                    <div class="card">

                        <form action="./webfiles/php/actions/products/scriptDelete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $tuple["id_article"]; ?>">
                            <button type="submit">Suprimer l'article</button>
                        </form>
                        <form action="./webfiles/php/views/products/formUpdate.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $tuple["id_article"]; ?>">
                            <div><button type="submit">Modifier l'article</button></div>
                        </form>


                        <img src="<?= $tuple["img"]; ?>" alt="illustration de <?= $tuple["descriptions"]; ?>">

                        <input type="hidden" name="id" value="<?php echo $tuple["prix"]; ?>">
                        <div><button class="info" type="submit">
                                <?php echo $tuple["prix"]; ?>€&nbsp;-&nbsp; Acheter
                            </button></div>

                        <p class="product">
                            <?= $tuple["descriptions"]; ?>
                        </p>
                    </div>
                <?php endforeach; ?>

            <?php else: ?>
                <p>Requete SQL non valide.</p>
            <?php endif; ?>

        </div>
    </main>
</body>

</html>