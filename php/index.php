<?php

// $nom= "lol";
// echo "mais $nom";



// $arr = [1,5,10];
// var_dump($arr);


// function Carre($nmb){
//     return $nmb*$nmb;
// }

// echo Carre(55);



function CalculMoyenne($a,$b,$c){
    return (($a + $b + $c)/3);
}

function AfficherResultat($nom,$moyenne){
    
    if ($moyenne >= 10) {
        return "$nom a une moyenne suffisante de $moyenne";
    }
    else{
        return "$nom a une moyenne insuffisante de $moyenne";
    }
}


echo AfficherResultat("Alice",CalculMoyenne(15, 8,9));


require 'vendor/autoload.php'; // Charger Guzzle

use GuzzleHttp\Client;

$client = new Client();


$region = "EUW1"; 
$queue = "RANKED_SOLO_5x5"; 


    //lien API plus clé
    $response = $client->request('GET', "https://ddragon.leagueoflegends.com/cdn/14.7.1/data/fr_FR/champion.json");
    
    $imageUrl = "https://ddragon.leagueoflegends.com/cdn/img/champion/loading/Aatrox_0.jpg";
    // Décoder la réponse JSON
    $leagueData = json_decode($response->getBody(), true);

    // Afficher les données pour vérification
    echo "<pre>";
    var_dump($leagueData);
  
    echo "</pre>";



?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    </style>
<body>
    <!-- Nom des collones du tableau -->
<table border="1">
    <thead>
        <th>rang</th>
        <th>wins</th>
        <th>loose</th>
        <th>leaguePoints</th>
    </thead>


<tbody>
    <!-- affichage des data de l'API -->
    <?php
    $pos = 1;
     foreach($leagueData['entries'] as $i ){
        echo "<tr>
        <td>$pos</td>
        <td>$i[wins]</td>
        <td>$i[losses]</td>
        <td>$i[leaguePoints]</td>
        
        
        </tr>";
        $pos ++;
    }  

    ?>
</tbody>
</table>
</body>
</html> -->