<?php
require_once("init.php");


if(isset($_SESSION["iduser"])) {
    header("location:profil.php");
}

if ($_POST) {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if ($email && $password) {

        
        $stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->execute(["email" => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        
        if ($user && password_verify($password, $user["password"])) {
            $_SESSION["iduser"] = $user["iduser"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["pseudo"] = $user["pseudo"];
            header("location:profil.php");
        } else {
            echo "La connexion a échoué !";
        }



    }

}

?>


<?php 
require_once("haut_site.php");
?>
    
    <main>
        <!-- form pour s'inscrire -->
        <h2 class="d-flex justify-content-center margt">CONNEXION</h2>
        <section class="d-flex flex-colum align-item-center ">
            <form  class="back" method="POST">
                <div class="d-flex flex-colum align-item-center margt">
                    <input class="email" name="email" type="email" placeholder="Email" id="emailC">
                    <input class="password" name="password" type="password" placeholder="password" >
                    <input  class="envoie margt" type="submit" value="Se connecter" id="valdiation">
                </div>
            </form>
            <p>Vous avez déja un compte ?</p>
            <a class="margbot" href="inscription.php">inscription</a>
        </section>
    </main>
    
    <script src="fichierJS/side.js"></script>
    <script src="fichierJS/connexion.js"></script>
</body>
</html>