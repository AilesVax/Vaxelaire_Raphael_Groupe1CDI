<?php 
require_once("haut_site.php");
require_once("init.php");

$iduser = $_SESSION["iduser"];
$email = $_SESSION["email"];
$pseudo = $_SESSION["pseudo"];
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
// affichage des cartes
$stmt = $pdo->prepare("SELECT * FROM card WHERE user_iduser = :id_user");

        $stmt->execute([
            "id_user" => $iduser,
        ]);
$cards = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Partie deconnexion

if(isset($_GET["action"]) && $_GET["action"] == "deconnexion") {
    // je vide ma session
    unset($_SESSION["iduser"]);
    unset($_SESSION["email"]);
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
<a href="?action=deconnexion">Se déconnecter</a>
</form>
    <!-- affcihe la carte et se deconnecter  -->
         <?php 
            foreach ($cards as $resultat) {
                echo "
                <div id='lol8' class='d-flex'>
                    <input class='index8 P' value='" . htmlspecialchars($resultat['name']) . "' />
                </div>";
            }
            ?>
            
</main>

<?php 
require_once("bas_site.php");
?>
<script src="JS/script.js"></script>
</body>
</html>
