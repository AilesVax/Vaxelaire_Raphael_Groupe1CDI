<?php 
require_once("haut_site.php");
$srmrCard = $pdo->prepare("SELECT * FROM carde ORDER BY RAND() LIMIT 3");
$srmrCard->execute();
$result = $srmrCard->fetchAll(PDO::FETCH_ASSOC);

$iduser = $_SESSION["iduser"];
$email = $_SESSION["email"];
$pseudo = $_SESSION["pseudo"];

$name1= $result[0]['name'];
$name2 = $result[1]['name'];
$name3 = $result[2]['name'];

 $sql = "INSERT INTO card (name, user_iduser) VALUES (:name, :id_user)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'name' => $name1,
        'id_user' => $iduser
    ]);
        $stmt->execute([
        'name' => $name2,
        'id_user' => $iduser
    ]);
        $stmt->execute([
        'name' => $name3,
        'id_user' => $iduser
    ]);
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
        <section>
            <button id="ouvrir">Ouvrir</button>
            <div id="loll" class="d-flex">
                        <input class="indexx" value="<?php echo($name1)?>" />
                        <input class="indexx" value="<?php echo($name2)?>" />
                        <input class="indexx" value="<?php echo($name3)?>" />

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
        <form class="fixe" action="">
            <div class="jolie">
                <input class="echange" type="text" placeholder="Pseudo du joueur"> <br>
                <input class="echange" type="text" placeholder="Nom de la carte"> <br>
                
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