<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ECF, creation d'un site web pour vendre des objets">
    <link rel="stylesheet" href="./webfiles/css/style.css">
    <title>Leboncote vente item</title>
    <link rel="shortcut icon" href="SRC/img/logo.png" type="image/x-icon">
</head>

<body>

    <?php
    // Connexion à la base de données
    $database = new PDO(
        'mysql:host=localhost;dbname=leboncote;charset=utf8',
        'root',
        ''
    );

    if (!empty($database)) {
        setcookie('user_id', "Le cookie", time() + 5000);
    }

    if (!empty($database)) {
    } else {

        "Connexion BDD non réussie";
    }

    ?>
    <?php
    if (isset($_COOKIE['user_id'])) {
    } else {
        echo "Votre ID n'est pas correctement défini";
    }
    ?>
    <header>
        <nav>
            <p>Leboncote</p>
            <ul>
                <li><a href="./webfiles/php/views/users/contact.php">Nous contacter</a></li>
                <li><a href="./webfiles/php/views/users/formConnexion.php">Connexion</a></li>
                <li><a href="./webfiles/php/actions/users/scriptDeconnexion.php">Déconnexion</a></li>
                <li><a href="./webfiles/php/views/users/formInscription.php">Inscription</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Nos ventes</h1>
        <?php
        //La commande suivante mise en commentaire devait servir a cacher le button "Ajouter un produit".
        //ayant rencontrer des probleme avec le coockie de session, ce dernier ne fonctionne pas
        //if (!empty($_SESSION) && $_SESSION['connected'] === TRUE) { ?>
        <form action="./webfiles/php/views/products/Ajout.php" method="POST">
            <button type="submit">Ajouter un produit</button>
        </form>
        <?php
        //}
        ?>
        <div class="container">
            <?php
            // Récupération des données de vente depuis la base de données
            // La requête SQL suivante récupère toutes les entrées de la table "vente"
            $exec = $database->query("SELECT * FROM vente");
            if ($exec != false):
                // Récupération des résultats de la requête sous forme de tableau associatif
                $res = $exec->fetchAll(PDO::FETCH_ASSOC);
                // Parcours des résultats et affichage avec $data sous forme de boucle
                // Afin d'eviter la redondance.
                foreach ($res as $data):
                    ?>
                    <div class="card">

                        <form action="./webfiles/php/actions/products/scriptDelete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data["id_article"]; ?>">
                            <button type="submit">Supprimer l'article</button>
                        </form>
                        <form action="./webfiles/php/views/products/formUpdate.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data["id_article"]; ?>">
                            <div><button type="submit">Modifier l'article</button></div>
                        </form>


                        <img src="<?= $data["img"]; ?>" alt="illustration de <?= $data["descriptions"]; ?>">

                        <input type="hidden" name="id" value="<?php echo $data["prix"]; ?>">
                        <div><button class="info" type="submit">
                                <?php echo $data["prix"]; ?>€&nbsp;-&nbsp; Acheter
                            </button></div>

                        <p class="product">
                            <?= $data["descriptions"]; ?>
                        </p>
                    </div>
                <?php endforeach;
                //Si la requete d'ajout ne fonctionne pas on affiche :
                ?>

            <?php else: ?>
                <p>Requête SQL non valide.</p>
            <?php endif; ?>
        </div>
    </main>
    <?php

    require_once('../ECF/webfiles/php/views/footer.php')
        ?>

</body>

</html>