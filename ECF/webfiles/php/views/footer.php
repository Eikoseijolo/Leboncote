<footer>

<<<<<<< HEAD
    <?php
    // Test de condition 
    // Si $_cookie défini & $_cookie identique à accepted alros les cookies sont acceptés
    
     if (!empty($_COOKIE["rgpd"]) &&  $_COOKIE["rgpd"] === "accepted") {
        echo "Les cookies ont étaient acceptés";
=======
    <?php if (!empty($_COOKIE["rgpd"]) && $_COOKIE["rgpd"] === "accepted") {
        echo "Les cookies ont étaient accepté";
>>>>>>> 941b021bcfef6dfc99b9af9fa55696e98af89f3a
    } else { ?>
        <div>
<<<<<<< HEAD
            <p>Avant que le consommateur ne soit lié par un contrat de vente de biens ou de fourniture de services, le professionnel communique au consommateur, de manière lisible et compréhensible, les informations suivantes : 1° Les caractéristiques essentielles du bien ou du service, compte tenu du support de communication utilisé et du bien ou service concerné </p>
            <form action="../../cookie.php" method="POST">
=======
            <p>Avant que le consommateur ne soit lié par un contrat de vente de biens ou de fourniture de services, le
                professionnel communique au consommateur, de manière lisible et compréhensible, les informations suivantes :
                1° Les caractéristiques essentielles du bien ou du service, compte tenu du support de communication utilisé
                et du bien ou service concerné </p>
            <form class="buttonCookie" action="../../../cookie.php" method="POST">
>>>>>>> 941b021bcfef6dfc99b9af9fa55696e98af89f3a
                <button type="submit">Accepter les cookies</button>
            </form>
        </div>
    <?php } ?>

<<<<<<< HEAD
    <p>LeBonCote - Direction par Vincent-William-Warren</p>
=======
    <p id="barname">LeBonCote - Direction par Vincent/William/Warren</p>
>>>>>>> 941b021bcfef6dfc99b9af9fa55696e98af89f3a
</footer>