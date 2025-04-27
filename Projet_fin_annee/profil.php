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
?>

<main>
<?php echo $_SESSION["pseudo"]; 

 echo "<br> Vous êtes connecté avec l'adresse email " . $_SESSION["email"];?>

<form method="post">

    <input type="text" id="new_pseudo" name="new_pseudo" value="<?php $_SESSION["pseudo"]; ?>">
    <button type="submit" name="submit_pseudo">Modifier</button>
</form>
<?php
   



        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

?>
       
</main>

<?php 
require_once("bas_site.php");
?>
</body>
</html>
