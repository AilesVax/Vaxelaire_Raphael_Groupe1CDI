<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="import" href="carte.php">
    <link rel="stylesheet" href="css/collection.css">
    <title>Document</title>
</head>
<style>
    input[value] {
        display: none;
    }
</style>

<body>
    <header class="d-flex">
  <!-- navbarre -->
        <img src="css/image/Untitled.png" alt="" class="w-menu disp " id="menu">
        <nav class="slide left">
            <ul class="d-flex flex-colum">

                <li class=" margleftli">
                    <a href="index.php">Acceuil</a>
                    <hr class="hrr">
                </li>

                <li class=" margleftli">
                    <a href="carte.php">Les Cartes</a>
                    <hr class="hrr">
                </li>

                <li class=" margleftli">
                    <a href="collection.php"> Collection</a>
                    <hr class="hrr">
                </li>
                <li class=" margleftli">
                    <a href="inscription.php">Inscription</a>
                    <hr class="hrr">
                </li>
                <li class=" margleftli">
                    <a href="connexion.php">Connexion</a>
                </li>

            </ul>

        </nav>

<!--partie sidenav repsonsive -->
        <img id="logo" src="css/image/logo_card.png" alt="logo LolCard ">
        <H1 class="headmargtop">LolCard</H1>
        <nav class="d-flex esp_nav ">
            <ul class="d-flex ">
                <li class=" margleftli">
                    <a href="index.php">Acceuil</a>
                </li>
                <li class=" margleftli">
                    <a href="carte.php">Les Cartes</a>
                </li>
                <li class=" margleftli">
                    <a href="collection.php">Collection</a>
                </li>
            </ul>
            <a href="connexion.php"><button id="btn1"><?php if (isset($_SESSION['email'])) {
                            echo 'profil';
                        } else {
                            echo 'Inscription / Connexion →';
                        }?></button></a>
        </nav>
    </header>
    <main>
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
                    <div id="lol" class="d-flex mage " >
                        <input class="index " value="Veigar" />
                        <input class="index" value="Corki" />
                        <input class="index" value="Rumble" />
                        <input class="index" value="Lulu" />
                    </div>
                    <div id="lol1" class="d-flex mage ">
                        <input class="index1" value="Pyke" />
                        <input class="index1" value="Graves" />
                        <input class="index1" value="Fizz" />
                        <input class="index1" value="Nautilus" />
                    </div>
                    <div id="lol2" class="d-flex mage ">
                        <input class="index2" value="Garen" />
                        <input class="index2" value="Kayle" />
                        <input class="index2" value="Poppy" />
                        <input class="index2" value="Lux" />
                    </div>
                    <div id="lol3" class="d-flex mage ">
                        <input class="index3" value="Olaf" />
                        <input class="index3" value="Trundle" />
                        <input class="index3" value="Volibear" />
                        <input class="index3" value="Sejuani" />
                    </div>
                    <div id="lol4" class="d-flex mage ">
                        <input class="index4" value="Viego" />
                        <input class="index4" value="Kalista" />
                        <input class="index4" value="Maokai" />
                        <input class="index4" value="Gwen" />
                    </div>
                    <div id="lol5" class="d-flex mage ">
                        <input class="index5" value="Ahri" />
                        <input class="index5" value="Yasuo" />
                        <input class="index5" value="Yone" />
                        <input class="index5" value="Irelia" />
                    </div>
                    <div id="lol6" class="d-flex mage ">
                        <input class="index6" value="Riven" />
                        <input class="index6" value="Darius" />
                        <input class="index6" value="Draven" />
                        <input class="index6" value="Sion" />
                    </div>
                    <div id="lol7" class="d-flex mage ">
                        <input class="index7" value="Vi" />
                        <input class="index7" value="Caitlyn" />
                        <input class="index7" value="Camille" />
                        <input class="index7" value="Orianna" />
                    </div>
                    <div id="lol8" class="d-flex mage ">
                        <input class="index8" value="Azir" />
                        <input class="index8" value="Taliyah" />
                        <input class="index8" value="Naafiri" />
                        <input class="index8" value="Xerath" />
                    </div>
                </div>
                <!-- les selections une par une -->
                 <!-- partie bandle-city -->
                <article class="content art nomDuContenu1 d-flex margleftt ">
                    <div id="loll" class="d-flex ">
                        <input class="indexx " value="Veigar" />
                        <input class="indexx " value="Corki" />
                        <input class="indexx " value="Rumble" />
                        <input class="indexx " value="Lulu" />
                    </div>
                    <div class="reposnsive">
                    <div class="image-container">

                        <img src="css/image/coeur_vide.png" class="coeur_vide " alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                </div>

                </article>
                <!-- partie bilgwater -->
                <article class="content art nomDuContenu2 flex margleftt">
                    <div id="loll1" class="d-flex">
                        <input class="indexx1" value="Pyke" />
                        <input class="indexx1" value="Graves" />
                        <input class="indexx1" value="Fizz" />
                        <input class="indexx1" value="Nautilus" />
                    </div>
                    <div class="reposnsive">
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                </div>
                </article>
                <!-- partie demacia -->
                <article class="content art nomDuContenu3 flex margleftt">
                    <div id="loll2" class="d-flex">
                        <input class="indexx2" value="Garen" />
                        <input class="indexx2" value="Kayle" />
                        <input class="indexx2" value="Poppy" />
                        <input class="indexx2" value="Lux" />
                    </div>
                    <div class="reposnsive">
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                </div>
                </article>
                <!-- partie freljord -->
                <article class="content art nomDuContenu4 flex margleftt">
                    <div id="loll3" class="d-flex">
                        <input class="indexx3" value="Olaf" />
                        <input class="indexx3" value="Trundle" />
                        <input class="indexx3" value="Volibear" />
                        <input class="indexx3" value="Sejuani" />
                    </div>
                    <div class="reposnsive">
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                </div>
                </article>
                <!-- partie ile -->
                <article class="content art nomDuContenu5 flex margleftt">
                    <div id="loll4" class="d-flex">
                        <input class="indexx4" value="Viego" />
                        <input class="indexx4" value="Kalista" />
                        <input class="indexx4" value="Maokai" />
                        <input class="indexx4" value="Gwen" />
                    </div>
                    <div class="reposnsive">
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                </div>
                </article>
                <!-- partie ionia -->
                <article class="content art nomDuContenu6 flex margleftt">
                    <div id="loll5" class="d-flex">
                        <input class="indexx5" value="Ahri" />
                        <input class="indexx5" value="Yasuo" />
                        <input class="indexx5" value="Yone" />
                        <input class="indexx5" value="Sejuani" />
                    </div>
                    <div class="reposnsive">
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                </div>
                </article>
                <!-- partie noxus -->
                <article class="content art nomDuContenu7 flex margleftt">
                    <div id="loll6" class="d-flex">
                        <input class="indexx6" value="Riven" />
                        <input class="indexx6" value="Darius" />
                        <input class="indexx6" value="Draven" />
                        <input class="indexx6" value="Sion" />
                    </div>
                    <div class="reposnsive">
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container"> 
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container"> 
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container"> 
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                </div>
                </article>
                <!-- partie piltover -->
                <article class="content art nomDuContenu8 flex margleftt">
                    <div id="loll7" class="d-flex">
                        <input class="indexx7" value="Vi" />
                        <input class="indexx7" value="Caitlyn" />
                        <input class="indexx7" value="Camille" />
                        <input class="indexx7" value="Orianna" />
                    </div>
                    <div class="reposnsive">
                    <div class="image-container"> 
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                </div>
                </article>
                <!-- partie shurima -->
                <article class="content art nomDuContenu9 flex margleftt">
                    <div id="loll8" class="d-flex">
                        <input class="indexx8" value="Azir" />
                        <input class="indexx8" value="Taliyah" />
                        <input class="indexx8" value="Naafiri" />
                        <input class="indexx8" value="Xerath" />
                    </div>
                    <div class="reposnsive">
                    <div class="image-container"> 
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    <div class="image-container">
                        <img src="css/image/coeur_vide.png" class="coeur_vide" alt="">
                        <img src="css/image/Coeur_plein.png" class="coeur_plein disp" alt="">
                    </div>
                    </div>
                </article>


            </div>
        </section>
    </main>
    <?php 
require_once("bas_site.php");
?>
    <script src="fichierJS/script.js"></script>
    <script src="fichierJS/main.js"></script>
    <script src="fichierJS/side.js"></script>
    <script src="fichierJS/collection.js"></script>
    <script src="fichierJS/newPage.js"></script>
</body>

</html>