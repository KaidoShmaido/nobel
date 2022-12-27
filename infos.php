







<?php

// Récupérer le nombre de prix nobels dans la base de données pour l'afficher à la place de TO FILL.


require "begin.html";
?>
<h1> List of the nobel prizes </h1>


<?php require_once 'database.php';

    if (isset($_GET["id"])) {
        $id = $_GET['id'];

        $sqlState = $conn->prepare('SELECT * FROM nobels WHERE id=? ');
        $sqlState->execute([$id]);
        if( $sqlState->rowCount()>=1){
           $stmt= $sqlState->fetch(PDO::FETCH_ASSOC);
           ?>
           
           <ul>
            <li><?= $stmt['id'];?></li>
            <li><?= $stmt['category'];?></li>
            <li><?= $stmt['name'];?></li>
            <li><?= $stmt['birthdate'];?></li>
            <li><?= $stmt['birthplace'];?></li>
            <li><?= $stmt['county'];?></li>
            <li><?= $stmt['motivation'];?></li>
            <li><?= $stmt['year'];?></li>

           </ul>

<?php
        } else {
            echo "undifined";
        }
    }        

    
    ?>


<?php require "end.html"; ?>