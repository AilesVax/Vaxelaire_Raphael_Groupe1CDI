<?php
require_once("haut_site.php");
require_once("init.php");



if (!isset($_SESSION["user"])) {
    header("location:inscription.php");
    exit();
}


// Partie modification pseudo
if (isset($_POST['submit_pseudo'])) {

    $pseudonyme = trim($_POST["new_pseudo"]);

    try {
        // commande pour changer le pseudo en focntion de quel email recuperer en session
        $stmt = $pdo->prepare("UPDATE user SET pseudo = :pseudo WHERE email = :email");
        $stmt->execute([
            "pseudo" => $pseudonyme,
            "email" => $email,


        ]);
        $pseudo = $pseudonyme;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}


// affichage des cartes
$stmt = $pdo->prepare("SELECT * FROM card WHERE  user_iduser = :id_user");

$stmt->execute([
    "id_user" => $iduser,
]);


$cards = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Partie favorie cartes
if (isset($_GET['favorie'])) {
    $favorie = $_GET['favorie'];
    $stmt = $pdo->prepare("UPDATE card SET fav = NOT fav WHERE idcard = :idcard ");
    $stmt->execute([
        "idcard" => $favorie,
    ]);
}



$stm = $pdo->prepare("SELECT * FROM card WHERE fav = 1 AND user_iduser = :id_user ");
$stm->execute(["id_user" => $iduser,]);

$favCard = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $pdo->prepare("SELECT * FROM card WHERE region = 'ionia' AND user_iduser = :id_user ");
$stm->execute(["id_user" => $iduser,]);

$ioniaCard = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $pdo->prepare("SELECT * FROM card WHERE region = 'bandle' AND user_iduser = :id_user ");
$stm->execute(["id_user" => $iduser,]);

$bandleCard = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $pdo->prepare("SELECT * FROM card WHERE region = 'bilgewater' AND user_iduser = :id_user ");
$stm->execute(["id_user" => $iduser,]);

$bilgwaterCard = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $pdo->prepare("SELECT * FROM card WHERE region = 'demacia' AND user_iduser = :id_user ");
$stm->execute(["id_user" => $iduser,]);

$demaciaCard = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $pdo->prepare("SELECT * FROM card WHERE region = 'freljord' AND user_iduser = :id_user ");
$stm->execute(["id_user" => $iduser,]);

$freljordCard = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $pdo->prepare("SELECT * FROM card WHERE region = 'iles' AND user_iduser = :id_user ");
$stm->execute(["id_user" => $iduser,]);

$ilesCard = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $pdo->prepare("SELECT * FROM card WHERE region = 'noxus' AND user_iduser = :id_user ");
$stm->execute(["id_user" => $iduser,]);

$noxusCard = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $pdo->prepare("SELECT * FROM card WHERE region = 'piltover' AND user_iduser = :id_user ");
$stm->execute(["id_user" => $iduser,]);

$piltoverCard = $stm->fetchAll(PDO::FETCH_ASSOC);

$stm = $pdo->prepare("SELECT * FROM card WHERE region = 'shurima' AND user_iduser = :id_user ");
$stm->execute(["id_user" => $iduser,]);

$shurimaCard = $stm->fetchAll(PDO::FETCH_ASSOC);
// Partie deconnexion

if (isset($_GET["action"]) && $_GET["action"] == "deconnexion") {
    unset($_SESSION["user"]);
    header("location:inscription.php");
    exit();
}


?>
<link rel="stylesheet" href="css/collection.css">
<style>
    .indexfav,
    .inde,
    .index,
    .index1,
    .index2,
    .index3,
    .index4,
    .index5,
    .index6,
    .index7,
    .index8[value] {
        display: none;
    }
</style>


<main>
    <!-- affcihe du pseudo  -->
    <div class="user-info">
        <?php

        echo " Adresse Email : " . $email;
        echo "<br> $pseudo"; ?>

        <!-- changer de pseudo -->
        <form method="post">
            .
            <input type="text" id="new_pseudo" name="new_pseudo" value="<?php htmlspecialchars($pseudo); ?>">

            <button type="submit" name="submit_pseudo">Modifier le pseudo</button>

            <a href="?action=deconnexion">Se déconnecter</a>

        </form>
    </div>
    <h2>Favorie</h2>
    <div id="lolfav" class="flex wrap">
        <?php
        foreach ($favCard as $resultat) {
            echo "
        
                <input  class='indexfav ' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . ($resultat['idcard']) . "' />

        
            ";
        }
        ?>
    </div>
    <h2>Mes cartes</h2>
    <!-- les tabs en haurt sur quoi cliquer -->
    <section>
        <ul class="d-flex fond justify-content-between change">
            <li class="tab tab-nomDuContenu tab-active borderr borderrb size">
                Tous
            </li>
            <li class="tab tab-nomDuContenu1 borderr size dis">
                Bandle_city
            </li>
            <li class="tab tab-nomDuContenu2 borderr size dis">
                Bilgewater
            </li>
            <li class="tab tab-nomDuContenu3 borderr size dis">
                Demacia
            </li>
            <li class="tab tab-nomDuContenu4 borderr size dis">
                Freljord
            </li>
            <li class="tab tab-nomDuContenu5 borderr size dis">
                Ionia
            </li>
            <li class="tab tab-nomDuContenu6 borderr size dis">
                Noxus
            </li>
            <li class="tab tab-nomDuContenu7 borderr size dis">
                Piltover
            </li>
            <li class="tab tab-nomDuContenu8 borderr size dis">
                Iles Obscures
            </li>
            <li class="tab tab-nomDuContenu9 borderr size dis">
                Shurima
            </li>
            <img id="fleche" class="disp" src="css/image/Fleche.png" alt="">


        </ul>
        <!-- selection de toutes les cartes  -->
        <div class="d-flex justify-content-center margt  size">
            <div class=" content nomDuContenu active flex margleft tous resss">
                <div id="lo" class="flex wrap">
                    <?php
                    foreach ($cards as $resultat) {
                        echo "
                            
                                <input  class='inde ' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . ($resultat['idcard']) . "' />
                            
                            ";
                    }
                    ?>
                </div>
            </div>
            <!-- partie bandle-city -->
            <article class="content art nomDuContenu1 flex margleftt ">
                <div id="lol" class="d-flex wrap">
                    <?php
                    foreach ($bandleCard as $resultat) {
                        echo "
                            
                                <input  class='index ' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . ($resultat['idcard']) . "' />
                            
                            ";
                    }
                    ?>
                </div>

            </article>
            <!-- partie bilgwater -->
            <article class="content art nomDuContenu2 flex margleftt">
                <div id="lol1" class="d-flex wrap">
                    <?php
                    foreach ($bilgwaterCard as $resultat) {
                        echo "
                            
                                <input  class='index1 ' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . ($resultat['idcard']) . "' />
                            
                            ";
                    }
                    ?>
                </div>
            </article>
            <!-- partie demacia -->
            <article class="content art nomDuContenu3 flex margleftt">
                <div id="lol2" class="d-flex wrap">
                    <?php
                    foreach ($demaciaCard as $resultat) {
                        echo "
                            
                                <input  class='index2 ' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . ($resultat['idcard']) . "' />
                            
                            ";
                    }
                    ?>
                </div>
            </article>
            <!-- partie freljord -->
            <article class="content art nomDuContenu4 flex margleftt">
                <div id="lol3" class="d-flex wrap">
                    <?php
                    foreach ($freljordCard as $resultat) {
                        echo "
                            
                                <input  class='index3 ' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . ($resultat['idcard']) . "' />
                            
                            ";
                    }
                    ?>
                </div>
        </div>
        </article>
        <!-- partie ile -->
        <article class="content art nomDuContenu5 flex margleftt">
            <div id="lol4" class="d-flex wrap">
                <?php
                foreach ($ioniaCard as $resultat) {
                    echo "
                            
                                <input  class='index4 ' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . ($resultat['idcard']) . "' />
                            
                            ";
                }
                ?>
            </div>
        </article>
        <!-- partie ionia -->
        <article class="content art nomDuContenu6 flex margleftt">
            <div id="lol5" class="d-flex wrap">
                <?php
                foreach ($noxusCard as $resultat) {
                    echo "
                            
                                <input  class='index5 ' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . ($resultat['idcard']) . "' />
                            
                            ";
                }
                ?>
            </div>
        </article>
        <!-- partie noxus -->
        <article class="content art nomDuContenu7 flex margleftt">
            <div id="lol6" class="d-flex wrap">
                <?php
                foreach ($piltoverCard as $resultat) {
                    echo "
                            
                                <input  class='index6 ' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . ($resultat['idcard']) . "' />
                            
                            ";
                }
                ?>
            </div>
        </article>
        <!-- partie piltover -->
        <article class="content art nomDuContenu8 flex margleftt">
            <div id="lol7" class="d-flex wrap">
                <?php
                foreach ($ilesCard as $resultat) {
                    echo "
                            
                                <input  class='index7 ' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . ($resultat['idcard']) . "' />
                            
                            ";
                }
                ?>
            </div>
        </article>
        <!-- partie shurima -->
        <article class="content art nomDuContenu9 flex margleftt">
            <div id="lol8" class="d-flex wrap">
                <?php
                foreach ($shurimaCard as $resultat) {
                    echo "
                            
                                <input  class='index8 ' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . ($resultat['idcard']) . "' />
                            
                            ";
                }
                ?>
            </div>
        </article>


        </div>
    </section>






</main>

<?php
require_once("bas_site.php");
?>
<script src="JS/profil.js"></script>

<script src="JS/main.js"></script>


</body>

</html>