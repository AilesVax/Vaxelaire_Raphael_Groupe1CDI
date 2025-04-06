<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="import" href="carte.html">
    <title>Document</title>
</head>
<style>


  main {
    background-color: #2d2e45;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    text-align: center;
    width: 90%;
    max-width: 400px;
    margin-left:40%
    
  }

  input[type="text"] {
    padding: 12px;
    border: none;
    border-radius: 8px;
    margin-right: 10px;
    width: 80%;
    font-size: 16px;
  }

  button {
    padding: 12px 20px;
    background-color: #5a5cff;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #4648c5;
  }

  #lol {
    margin-top: 20px;
    background-color: #1f2033;
    padding: 40px;
    border-radius: 12px;
    box-shadow: inset 0 0 10px rgba(255, 255, 255, 0.05);
    color:white;    
  }

  #lol p {
    font-size: 18px;
    margin: 0;
  }
</style>


<body>
    <header class="d-flex">

        <img src="css/image/Untitled.png" alt="" class="w-menu disp " id="menu">
        <nav class="slide left">
            <ul class="d-flex flex-colum">

                <li class=" margleftli">
                    <a href="index.html">Acceuil</a>
                    <hr class="hrr">
                </li>

                <li class=" margleftli">
                    <a href="carte.html">Les Cartes</a>
                    <hr class="hrr">
                </li>

                <li class=" margleftli">
                    <a href="collection.html"> Collection</a>
                    <hr class="hrr">
                </li>
                <li class=" margleftli">
                    <a href="inscription.html">Inscription</a>
                    <hr class="hrr">
                </li>
                <li class=" margleftli">
                    <a href="connexion.html">Connexion</a>
                </li>

            </ul>

        </nav>


        <img id="logo" src="css/image/logo_card.png" alt="logo LolCard ">
        <H1 class="headmargtop">LolCard</H1>
        <nav class="d-flex esp_nav ">
            <ul class="d-flex ">
                <li class=" margleftli">
                    <a href="index.html">Acceuil</a>
                </li>
                <li class=" margleftli">
                    <a href="carte.html">Les Cartes</a>
                </li>
                <li class=" margleftli">
                    <a href="collection.html">Collection</a>
                </li>
            </ul>
            <a href="connexion.html"><button id="btn1">Inscription / Connexion →</button></a>

        </nav>
    </header>
    <main>
    <section>
        <!-- partie recherche de joueur connecter au js -->
        <input type="text" id="index" placeholder="numero du joueur entre 1 et 300">
        <button onclick="displayChallengerPlayers()">Chercher</button>
        <div id="lol"></div>
    </section>
    </main>

    <footer class="d-flex  gray ">
        <div class="margleft">
            <h2 class="mart ">Nous Contactez </h2>
            <div class="d-flex w-60 padd justify-content-center cont">
                <img class="margleft contact" src="css/image/174857.png" alt=" logo linkedin">
                <img class="margleft contact" src="css/image/pngtree-email-icon-png-image_1757854.jpg"
                    alt=" logo email">
                <img class="margleft contact" src="css/image/Facebook_logo_(square).png" alt=" logo facebook">
                <img class="margleft contact" src="css/image/Instagram_icon.png.webp" alt=" log instagram">
            </div>
        </div>
        
            <p class="arobase">© 2025 | Entreprise LolCard <br> <br> <br> <br>Service client disponible / conditions générales d'utilisation / Mentions légales /
                politique de confidentialité</p>
            

    </footer>

   
 
    
        
   
        
 
   
    <script src="script.js"></script>
    <script src="fichierJS/side.js"></script>
</body>

</html>