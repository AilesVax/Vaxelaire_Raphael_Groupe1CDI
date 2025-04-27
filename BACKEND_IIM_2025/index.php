<?php

require_once("connexion.php"); // me permet de récupérer ma connexion


/// SELECT


// $stmt = $pdo->query("SELECT * FROM book"); // PDO STATEMENT
// $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
// echo "<pre>";
// la méthode fetchALL me renvoit un tableau multi dimentionnel avec tous mes enregistrements en base
// le PDO FETCH_ASS est une constante qui me permet d'avoir en index de mes tableaux, le nom des colonnes



/// INSERT

// $sql="INSERT INTO book (title,author,date_publication,disponible) VALUES('Harry Potter','J.K ROwling','2000-05-18',0)";
// $pdo->exec($sql);


///// 
///// PREPARE & EXECUTE
/////

// try{
//     $stmt = $pdo->prepare("INSERT INTO book (title, author, date_publication, category_idcategory) 
//     VALUES( :title, :author, :date_publication, :category )");
    
//     $stmt->execute([
//         "title" => "Le rouge et le noir",
//         "author" => "Standall",
//         "date_publication" => "1945-01-01",
//         "category" => 1,
//     ]);
    
//     $stmt->execute([
//         "title" => "One piece",
//         "author" => "Oda",
//         "date_publication" => "1975-01-01",
//         "category" => 1,
//     ]);
// } catch(PDOException $e) {
//     echo $e->getMessage();
// }
if ($_POST) {

    // var_dump($_POST);
    $title = $_POST["title"];
    $author = $_POST["author"];
    $date_publication = $_POST["date_publication"];

    try {
        $stmt = $pdo->prepare("INSERT INTO book (title, author, date_publication, disponible) 
    VALUES( :title, :author, :date_publication, :disponible )");

        $stmt->execute([
            "title" => $title,
            "author" => $author,
            "date_publication" => $date_publication,
            "disponible" => 1,
        ]);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}
if(isset($_GET['action']) && $_GET['action'] == 'delete') {

    $idbook = $_GET['id_book'];

    try {
        $stmt = $pdo->prepare("DELETE FROM book WHERE idbook = :idbook");

        $stmt->execute([
            "idbook" => $idbook,
        ]);

        echo "Le livre a bien été supprimé !";

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}

///// 
///// SELECT
/////
$stmt = $pdo->query("SELECT * FROM book"); // PDO STATEMENT
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
$trie = $pdo->query("SELECT * FROM book ORDER BY title ASC");
$booksTrie = $trie->fetchAll(PDO::FETCH_ASSOC);
$Annee = $pdo->query("SELECT * FROM book WHERE YEAR(date_publication) >2000 ");
$booksAnnee = $Annee->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Mes livres en BDD</h1>

    <table border="1">
        <thead>
    <th>Titre</th>
    <th>Auteur</th>
    <th>Date</th>
    <th>disponible</th>
    <th>Action</th>
        </thead>

        <tbody>

            <?php 
            
            foreach ($books as $key => $book) {
                echo "<tr>";
                    echo "<td>" . $book["title"] . "</td>";
                    echo "<td>" . $book["author"] . "</td>";
                    echo "<td>" . $book["date_publication"] . "</td>";
                    echo "<td>" . $book["disponible"] . "</td>";
                    echo "<td> <a href='?id_book=". $book["idbook"] . "&action=delete'> Supprimer </a> </td>";  
                echo "</tr>";
            }
            
            ?>

        </tbody>

        <tbody>
        
        </tbody>
    </table>
    <br>
 <h2>Triez par alphabet a à Z sur le titre</h2>
    <table border="1">
        <thead>
    <th>Titre</th>
    <th>Auteur</th>
    <th>Date</th>
    <th>disponible</th>
    <!-- <th>Categorie</th> -->
        </thead>

        <tbody>

        <?php 
            
            foreach ($booksTrie as $key => $bookss) {
                echo "<tr>";
                    echo "<td>" . $bookss["title"] . "</td>";
                    echo "<td>" . $bookss["author"] . "</td>";
                    echo "<td>" . $bookss["date_publication"] . "</td>";
                    echo "<td>" . $bookss["disponible"] . "</td>";
                    
                echo "</tr>";
            }
            
            ?>

        </tbody>

        <tbody>
        
        </tbody>
    </table>
    <br>
 <h2>POur les annes de 2000 ou plus</h2>
    <table border="1">
        <thead>
    <th>Titre</th>
    <th>Auteur</th>
    <th>Date</th>
    <th>disponible</th>
    <!-- <th>Categorie</th> -->
        </thead>

        <tbody>

        <?php 
            
            foreach ($booksAnnee as $key => $booksss) {
                echo "<tr>";
                    echo "<td>" . $booksss["title"] . "</td>";
                    echo "<td>" . $booksss["author"] . "</td>";
                    echo "<td>" . $booksss["date_publication"] . "</td>";
                    echo "<td>" . $booksss["disponible"] . "</td>";
                    
                echo "</tr>";
            }
            
            ?>

        </tbody>

        <tbody>
        
        </tbody>
    </table>
    <br>
    <form method="POST">

        <label for="title">Titre:</label>
        <input type="text" name="title" id="title" placeholder="Titre">


        <label for="author">Auteur:</label>
        <input type="text" name="author" id="author" placeholder="Auteur">


        <label for="date_publication">Titre:</label>
        <input type="date" name="date_publication" id="date_publication">

        <input type="submit" value="Créer livre">

    </form>
    
</body>
</html>