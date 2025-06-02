<?php
require_once("haut_site.php");
if (!isset($_SESSION["user"])) {
    header("location:inscription.php");
    exit();
}
// mettre le temps enf ocntion de paris
date_default_timezone_set('Europe/Paris');
$stmt = $pdo->prepare("SELECT `date` FROM user WHERE iduser = :iduser");
$stmt->execute(['iduser' => $iduser]);
$datePrise = $stmt->fetchColumn();

$bon = true;
// car au debut c'est nul donc instancier la date
if ($datePrise === null) {
    $update = $pdo->prepare("UPDATE user SET `date` = NOW() WHERE iduser = :iduser");
    $update->execute(['iduser' => $iduser]);
    $bon = true;
} else {
    $datePriseDT = new DateTime($datePrise);
    $maintenant = new DateTime();

    $diff = $maintenant->getTimestamp() - $datePriseDT->getTimestamp();

    if ($diff < 15) {
        $bon = false;
    } else {
        // mettre le temps a jour apres la date passé
        $update = $pdo->prepare("UPDATE user SET `date` = NOW() WHERE iduser = :iduser");
        $update->execute(['iduser' => $iduser]);
        $bon = true;
    }
}

if ($bon) {
    // prednre 3 cartes aleatoire
    $srmrCard = $pdo->prepare("SELECT * FROM carde ORDER BY RAND() LIMIT 3");
    $srmrCard->execute();
    $result = $srmrCard->fetchAll(PDO::FETCH_ASSOC);


    $name1 = $result[0]['name'];
    $name2 = $result[1]['name'];
    $name3 = $result[2]['name'];

    $region1 = $result[0]['region'];
    $region2 = $result[1]['region'];
    $region3 = $result[2]['region'];
// inserer dans card la carte relier a l'user
    $sql = "INSERT INTO card (name, user_iduser,fav,region) VALUES (:name, :id_user,:fav,:region)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'name' => $name1,
        'id_user' => $iduser,
        'fav' => 0,
        'region' => $region1,
    ]);
    $stmt->execute([
        'name' => $name2,
        'id_user' => $iduser,
        'fav' => 0,
        'region' => $region2
    ]);
    $stmt->execute([
        'name' => $name3,
        'id_user' => $iduser,
        'fav' => 0,
        'region' => $region3
    ]);

}
if ($_POST) {
    // prendre les valeurs
    $pseudo_env = trim($_POST['pseudo_echange']);
    $nomCarte = trim($_POST['carte_echange']);
    // enlever la carte en question sur le compte actuelle
    $sql = 'DELETE FROM card WHERE name = :name AND user_iduser = :id_user';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_user' => $iduser, 'name' => $nomCarte]);

// selectionne tous les user en fonction du pseudo
    $sql2 = 'SELECT * FROM user WHERE pseudo = :pseudo';
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute(['pseudo' => $pseudo_env]);
    $userPseudo = $stmt2->fetch();
// selectionne les region en fonction du nom
    $sqlRegion = 'SELECT region FROM carde WHERE name = :name';
    $stmtRegion = $pdo->prepare($sqlRegion);
    $stmtRegion->execute(['name' => $nomCarte]);
    $carteRegion = $stmtRegion->fetch();


    if ($userPseudo && $userPseudo['pseudo'] == $pseudo_env) {
        // j'ajoute la carte sur le compte demander
        $sql3 = 'INSERT INTO card (name, user_iduser,fav,region) VALUES (:name, :id_user,:fav,:region)';
        $stmt3 = $pdo->prepare($sql3);
        $stmt3->execute(['id_user' => $userPseudo['iduser'], 'name' => $nomCarte, 'fav' => 0, 'region' => $carteRegion['region']]);
    }
}
?>
<style>
    input[value] {
        display: none;
    }
</style>
<main>
    <!-- <button id="sbr"class=" bouton ">sombre</button> -->
    <section id="back" class="d-flex flex-colum  ">
        <h2 class="ecrit">La nouvelle collection en partenariat <br> avec League of Legends <br> <span
                class="titre">LOLCARD</span></h2>
    </section>
    <!-- vidéo du gameplays possible -->
    <section class="d-flex justify-content-center">
        <article class="d-flex w-60 justify-content-center">
            <h3 id="text-video" class="d-flex align-item-center">Vous pourrez retrouver toutes les cartes disponible
                et les différentes régions pour pouvoir jouer avec bonne decouverte !</h3>
            <div class="padd">
                <h2 class="d-flex justify-content-center">Possible Gameplays:</h2> <br>
                <iframe width="500" height="250" src="https://www.youtube.com/embed/RDPhHpyZIck" title="What is Legends of Runeterra? Explained | 
                    Intro Guide and Gameplay Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
                    picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
            </div>

        </article>
    </section>
    <!-- Partie deballement carte -->
    <section class="flex flex-colum align-item-center">
        <button id="ouvrir">Ouvrir un booster</button>
        <h3><?php if ($bon == false) {
            echo 'Pas de booster disponible';
        } ?></h3>
        <div id="loll" class="d-flex">
            <input class="indexx" value="<?php echo ($name1) ?>" />
            <input class="indexx" value="<?php echo ($name2) ?>" />
            <input class="indexx" value="<?php echo ($name3) ?>" />

        </div>
    </section>
    <!-- les différentes région ou l'on peut cliquer dessus -->
    <section class="d-flex flex-colum align-item-center margtop  ">
        <h2 id="regions">Les différentes régions</h2>
        <div class="d-flex reglog padd ">
            <div class=" d-flex flex-colum align-item-center">
                <a class=" borderb  " href="carte.php#bandle"><img class=" border margleft w-50 bb "
                        src="logo_image/Bandle_City_LoR_Region.png" alt="logo Bandle City"></a>
                <h3 class="margleft2 margright size bandle"> Bandle City </h3>
            </div>
            <div class=" d-flex flex-colum align-item-center">
                <a class=" borderb " href="carte.php#bilgwater"><img class="border margleft w-50 bb"
                        src="logo_image/Bilgewater_LoR_Region.png" alt="logo Bilgwater"></a>
                <h3 class="margleft2 margright size bilg"> Bilgewater </h3>
            </div>
            <div class=" d-flex flex-colum align-item-center">
                <a class=" borderb " href="carte.php#demacia"><img class="border margleft w-50 bb"
                        src="logo_image/Demacia_LoR_Region.png" alt="logo  Demacia"></a>
                <h3 class="margleft2 margright size dema"> Demacia </h3>
            </div>
        </div>
        <div class="d-flex reglog padd">
            <div class=" d-flex flex-colum align-item-center">
                <a class=" borderb " href="carte.php#freljord"><img class="border margleft w-50 bb"
                        src="logo_image/Freljord_LoR_Region.png" alt="logo freljord "></a>
                <h3 class="margleft2 margright size frel"> Freljord </h3>
            </div>
            <div class=" d-flex flex-colum align-item-center">
                <a class=" borderb " href="carte.php#ionia"><img class="border margleft w-50 bb"
                        src="logo_image/Ionia_LoR_Region.png" alt="logo ionia"></a>
                <h3 class="margleft2 margright size ionia "> Ionia </h3>
            </div>
            <div class=" d-flex flex-colum align-item-center">
                <a class=" borderb " href="carte.php#noxus"><img class="border margleft w-50 bb"
                        src="logo_image/Noxus_Crest_icon(1).png" alt="logo noxus"></a>
                <h3 class="margleft2 margright size noxus"> Noxus </h3>
            </div>
        </div>
        <div class="d-flex  reglog padd">
            <div class=" d-flex flex-colum align-item-center">
                <a class=" borderb " href="carte.php#piltover"><img class="border margleft w-50 bb"
                        src="logo_image/Piltover_Zaun_LoR_Region.png" alt="logo piltover et zaun"></a>
                <h3 class="margleft2 margright size pil"> Piltover & Zaun </h3>
            </div>
            <div class=" d-flex flex-colum align-item-center">
                <a class=" borderb " href="carte.php#ile"><img class="border margleft w-50 bb"
                        src="logo_image/Shadow_Isles_LoR_Region.png" alt="logo  iles obscures"></a>
                <h3 class="margleft2 margright size ile"> Îles obscures </h3>
            </div>
            <div class=" d-flex flex-colum align-item-center">
                <a class=" borderb " href="carte.php#shurima"><img class="border margleft w-50 bb"
                        src="logo_image/Shurima_LoR_Region.png" alt="logo Shurima "></a>
                <h3 class="margleft2 margright size shu"> Shurima </h3>
            </div>
        </div>




    </section>
    <!-- bouton echanger -->
    <form class="fixe" method="POST">
        <div class="jolie">
            <input class="echange" type="text" placeholder="Pseudo du joueur" id="pseudo_echange" name="pseudo_echange">
            <br>
            <input class="echange" type="text" placeholder="Nom de la carte" id="carte_echange" name="carte_echange">
            <br>
            <button class="exchange" type="submit">Envoyer</button>
        </div>
        <button id="exchange">Échange</button>
    </form>
</main>
<?php
require_once("bas_site.php");
?>






<!-- <script src="script.js"></script> -->
<script src="JS/side.js"></script>
<script src="JS/deballer.js"></script>
</body>

</html>