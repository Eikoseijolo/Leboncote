<?php 
   
 // FAIRE UN REQUIRE ONCE DU DBCONNECT 
    if(!empty($conn)){

        $nom = $_POST["descriptions"];
        $image = $_POST["img"];
        $prix = $_POST["prix"];
        $article = $_POST["article"];

        $req = "INSERT INTO vente (descriptions, img, prix, article) VALUES ('$nom', '$image', '$prix', '$article')";

        $exec = $conn->query($req);

        if($exec != false){
            echo "l'ajout de l'article a fonctionné";
        }
        else{
            echo "l'ajout de votre article n'a pas fonctionné";
        }
    }
    
?>