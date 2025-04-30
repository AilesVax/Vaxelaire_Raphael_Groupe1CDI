<?php 
require_once("haut_site.php");
require_once("init.php");

// Partie modification pseudo
if(isset($_POST['submit_pseudo'])) {

    $pseudonyme = trim($_POST["new_pseudo"]);

    try {
        // commande pour changer le pseudo en focntion de quel email recuperer en session
        $stmt = $pdo->prepare("UPDATE user SET pseudo = :pseudo WHERE email = :email");
        $stmt->execute([
            "pseudo" => $pseudonyme,
            "email" => $_SESSION["email"],
            
            
        ]);
        $_SESSION["pseudo"] = $pseudonyme;
        echo "Le pseudonyme a bien été modifié !";

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}
// Partie pour supprimer le compte jsute supprimer le pseusdo suffit
if(isset($_GET['action']) && $_GET['action'] == 'delete') {

    $suppseudo = $_GET['supseudo'];

    try {
        // commande pour supprimer le pseudo 
        $stmt = $pdo->prepare("DELETE FROM user WHERE pseudo = :pseudo");

        $stmt->execute([
            "pseudo" => $suppseudo,
        ]);

        echo "Le pseudo a bien été supprimé !";
        header("location:inscription.php"); //change de page
        unset($_SESSION["iduser"]); //vide la session pour ne pas avoir de bug
        unset($_SESSION["email"]);
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}


// partie carte
//Creer un tableau pour enregister les cartes 
if (!isset($_SESSION['cartes'])) {
    $_SESSION['cartes'] = []; 
}


if($_GET && isset($_GET["carte"]) && trim($_GET["carte"]) !== "") {
    $card = trim($_GET["carte"]);
    //commande pour prendre les nom de la tabels card
    $srmrCard = $pdo->prepare("SELECT * FROM card WHERE name = :name ");
    $srmrCard->execute([
        'name'=> $card
    ]);
    
    $result = $srmrCard->fetchAll(PDO::FETCH_ASSOC); 
   
    //ajoute au tableau le ce qu'on lui envoie pour recupere le nom
    if ($result) {
       
        $_SESSION['cartes'][] = $result[0];
    } else {
        echo "La carte n'existe pas dans la base de données.";
    }
    
}
// Partie deconnexion

if(isset($_GET["action"]) && $_GET["action"] == "deconnexion") {
    // je vide ma session
    unset($_SESSION["iduser"]);
    unset($_SESSION["email"]);
    unset($_SESSION["cartes"]);
    header("location:inscription.php"); // redirection sans paramètre
}


?>
<style>
    #lol8 input {
        display: none; 
    }
</style>



<main>
    <!-- affcihe du pseudo  -->
<?php echo $_SESSION["pseudo"]; 

 echo "<br> Vous êtes connecté avec l'adresse email " . $_SESSION["email"];?>

<!-- changer de pseudo et supprimer le compte -->
<form method="post">
.
    <input type="text" id="new_pseudo" name="new_pseudo" value="<?php  htmlspecialchars($_SESSION["pseudo"]); ?>">

    <button type="submit" name="submit_pseudo">Modifier le pseudo</button>
    <?php   echo "<td> <a href='?supseudo=". $_SESSION["pseudo"] . "&action=delete'> Supprimer le compte </a> </td>";  
?>
</form>
<!-- jsute pour vous permettre de regarder ma base de données en direct facilement sera retirer apres  -->
<?php
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
?>
<!-- ajouter la carte -->
<form action="" method="GET">
    <input type="text" id="carte" name="carte" placeholder="Entrez le nom de la carte ">   
    <input type="submit" value="Ajouter une carte">
</form>
    <!-- affcihe la carte et se deconnecter  -->
         <?php 
            foreach ($_SESSION['cartes'] as $resultat) {
                echo "
                <div id='lol8' class='d-flex'>
                    <input class='index8 P' value='" . htmlspecialchars($resultat['name']) . "' />
                </div>";
            }
            

            
            ?>
            <a href="?action=deconnexion">Se déconnecter</a>
</main>

<?php 
require_once("bas_site.php");
?>
<script src="fichierJS/script.js"></script>
</body>
</html>
