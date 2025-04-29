<?php 
require_once("haut_site.php");
require_once("init.php");

if(isset($_POST['submit_pseudo'])) {

    $pseudonyme = trim($_POST["new_pseudo"]);

    try {
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
if(isset($_GET['action']) && $_GET['action'] == 'delete') {

    $suppseudo = $_GET['supseudo'];

    try {
        $stmt = $pdo->prepare("DELETE FROM user WHERE pseudo = :pseudo");

        $stmt->execute([
            "pseudo" => $suppseudo,
        ]);

        echo "Le pseudo a bien été supprimé !";
        header("location:inscription.php");
        unset($_SESSION["iduser"]);
    unset($_SESSION["email"]);
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}


// partie carte
if (!isset($_SESSION['cartes'])) {
    $_SESSION['cartes'] = []; 
}


if($_GET && isset($_GET["carte"]) && trim($_GET["carte"]) !== "") {
    $card = trim($_GET["carte"]);
    $srmrCard = $pdo->prepare("SELECT * FROM card WHERE name = :name ");
    $srmrCard->execute([
        'name'=> $card
    ]);
    
    $result = $srmrCard->fetchAll(PDO::FETCH_ASSOC); 
   
    
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
<?php echo $_SESSION["pseudo"]; 

 echo "<br> Vous êtes connecté avec l'adresse email " . $_SESSION["email"];?>

<form method="post">
.
    <input type="text" id="new_pseudo" name="new_pseudo" value="<?php  htmlspecialchars($_SESSION["pseudo"]); ?>">

    <button type="submit" name="submit_pseudo">Modifier le pseudo</button>
    <?php   echo "<td> <a href='?supseudo=". $_SESSION["pseudo"] . "&action=delete'> Supprimer le compte </a> </td>";  
?>
</form>
<?php
   



        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

?>
<form action="" method="GET">
    <input type="text" id="carte" name="carte" placeholder="Entrez le nom de la carte ">   
    <input type="submit" value="Ajouter une carte">
</form>
    
         <?php 
            //  echo"   
            // <div id='lol8' class='d-flex'>
            // <input class='index8 P' value='" . htmlspecialchars($result['name']) . "' />
            // </div>";
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
