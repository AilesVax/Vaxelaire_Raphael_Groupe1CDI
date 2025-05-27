<?php 
require_once("haut_site.php");
require_once("init.php");



if (!isset($_SESSION["user"])) {
    header("location:inscription.php");
    exit();
}


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
// Partie favorie cartes
if (isset($_GET['favorie'])){
   $favorie = $_GET['favorie'];
$stmt = $pdo->prepare("UPDATE card SET fav = NOT fav WHERE idcard = :idcard ");
$stmt->execute([
            "idcard" => $favorie,
        ]); 
}



    $stm = $pdo->prepare("SELECT * FROM card WHERE fav = 1 AND user_iduser = :id_user");
    $stm->execute(["id_user" => $iduser,]);

$favCard = $stm->fetchAll(PDO::FETCH_ASSOC);

// Partie deconnexion

if(isset($_GET["action"]) && $_GET["action"] == "deconnexion") {
unset($_SESSION["user"]);
header("location:inscription.php");
exit();
}


?>
<style>
    #lol8 input {
        display: none; 
    }
       #lol7 input {
        display: none; 
    }
</style>



<main>


    <!-- affcihe du pseudo  -->
<?php echo $pseudo; 

 echo "<br> Vous êtes connecté avec l'adresse email " . $email;?>

<!-- changer de pseudo et supprimer le compte -->
<form method="post">
.
    <input type="text" id="new_pseudo" name="new_pseudo" value="<?php  htmlspecialchars($pseudo); ?>">

    <button type="submit" name="submit_pseudo">Modifier le pseudo</button>
    <?php   echo "<td> <a href='?supseudo=". $pseudo . "&action=delete'> Supprimer le compte </a> </td>";  
?>
<a href="?action=deconnexion">Se déconnecter</a>

</form>
<h2>Favorie</h2>
   <div id="lol7" class="flex wrap">
    <?php 
    foreach ($favCard as $resultat) {
        echo "
        
             <input  class='index7' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . htmlspecialchars($resultat['idcard']) .  "' />

        
        ";
    }
    ?>
</div>


    <!-- affcihe la carte  -->
<h2>Ma Collection</h2>
   <div id="lol8" class="flex wrap">
    <?php 
    foreach ($cards as $resultat) {
        echo "
        
            <input  class='index8' value='" . htmlspecialchars($resultat['name']) . "' data-id='" . htmlspecialchars($resultat['idcard']) .  "' />
           
        ";
    }
    ?>
</div>

</main>

<?php 
require_once("bas_site.php");
?>
<script src="JS/profil.js"></script>
</body>
</html>
