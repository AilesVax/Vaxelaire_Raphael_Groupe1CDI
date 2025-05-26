<?php 
require_once("haut_site.php");
?>
<?php

require_once("init.php");
// parie pour s'inscrire et verification du password et sa verif
if($_POST){
    $pseudo = $_POST["pseudo"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    
    if($password == $password2){
    $sql = "INSERT INTO user (pseudo,email, password) VALUES(:pseudo,:email,:password)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'pseudo' => $pseudo,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    echo "Votre user a été cocrrectement inséré en BDD";
    }else{
        echo "pas meme mot de passe";
    }


}


?>



    <main>
        <!-- different message afficher en js -->
        <h2 class="d-flex justify-content-center margt">INSCRIPTION</h2>
        <section class="d-flex flex-colum align-item-center back2 ">
            <div class="message-error">
                <ul id="test">
                    
                </ul>
            </div>
            <div class="message-success">
                Formulaire envoyé !
            </div>

            <!-- formulaire d'inzcirption -->
            <form  action="" method="POST">
                <div>
                    <label for="pseudo">Pseudo</label>
                    <input  type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
                </div>
            
                <div>
                    <label for="email">Email</label>
                    <input class="email" type="email" name="email" id="email" placeholder="Email">
                </div>
                
                <div>
                    <label for="password">Mot de passe</label>
                    <input  class="password" type="password" name="password" id="password" placeholder="Password">
                </div>
                
                <div>
                    <label for="password2">Verification mot de passe</label>
                    <input class="password"  type="password" name="password2" id="password2" placeholder="Password">
                </div>
                
                
                <button class="envoie2 margt" type="submit" value="inscription">S'inscrire</button>
                
            
            </form>
            <p id="messC">Vous n'avez pas de compte ?</p>
            <a class="margbot" href="connexion.php">Connexion</a>
        </section>
    </main>
<script src="JS/formulaire.js"></script>
<script src="JS/side.js"></script>
</body>
</html>