<footer>

    <?php if (!empty($_COOKIE["rgpd"]) &&  $_COOKIE["rgpd"] === "accepted") {
        echo "Les cookies ont étaient accepté";
    } else { ?>

        <div>
            <p>Avant que le consommateur ne soit lié par un contrat de vente de biens ou de fourniture de services, le professionnel communique au consommateur, de manière lisible et compréhensible, les informations suivantes : 1° Les caractéristiques essentielles du bien ou du service, compte tenu du support de communication utilisé et du bien ou service concerné </p>
            <form action="../../../cookie.php" method="POST">
                <button type="submit">Accepter les cookies</button>
            </form>
        </div>
    <?php } ?>

    <p>LeBonCote - Direction par Vincent/William/Warren</p>
</footer>