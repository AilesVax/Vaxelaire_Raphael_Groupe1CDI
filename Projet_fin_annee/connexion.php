<?php
require_once("init.php");

//pour ne pas acceder a la page inscirption si connecter
if(isset($_SESSION["iduser"])) {
    header("location:profil.php");
}
//permet de remplir la session et de se connecter a l'aide de l'eamil et du password
if ($_POST) {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if ($email && $password) {

        
        $stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->execute(["email" => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        
        if ($user && password_verify($password, $user["password"])) {
            $_SESSION["user"] = [
                "iduser" => $user["iduser"],
                "email" => $user["email"],
                "pseudo" => $user["pseudo"],
                "idcard" => $user["idcard"]
            ];
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
    
    <script src="JS/side.js"></script>
    <script src="JS/connexion.js"></script>
</body>
</html>