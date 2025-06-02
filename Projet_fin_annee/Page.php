<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/page.css">
    <title>Document</title>
</head>

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
                     <a href="inscription.php"><?php if (isset($email)) {
                            echo 'profil';
                        } else {
                            echo 'Inscription ';
                        }?></a>
                    <hr class="hrr">
                </li>
                <li class=" margleftli">
                   <a href="connexion.php"><?php if (isset($email)) {
                            echo '';
                        } else {
                            echo 'Connexion ';
                        }?></a>
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
        <!-- affchage de la decription de la carte dynamiquement -->
        <div id="PageCarte" class="d-flex justify-content-center"></div>
        
    
    </main>
    <?php 
require_once("bas_site.php");
?>
    <script src="JS/newPage.js"></script>
    <script src="JS/side.js"></script>
</body>

</html>