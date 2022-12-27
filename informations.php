<?php

// Récupérer le nombre de prix nobels dans la base de données pour l'afficher à la place de TO FILL.


require "begin.html";
require "Model.php";
$model = new Model();
if (isset($_GET["id"])) {

    $id = $_GET['id'];
    $user = $model->get_nobel_prize_informations($id);

    var_dump($user);?>
    <ul>
            <li><?= $user['id'];?></li>
            <li><?= $user['category'];?></li>
            <li><?= $user['name'];?></li>
            <li><?= $user['birthdate'];?></li>
            <li><?= $user['birthplace'];?></li>
            <li><?= $user['county'];?></li>
            <li><?= $user['motivation'];?></li>
            <li><?= $user['year'];?></li>

           </ul>



<?php
    
    
    } else {
        echo "undifined";
    }
        


?>

<?php require "end.html"; ?>















?>
<h1> List of the nobel prizes </h1>

<p> Welcome to the website listing the different nobel prizes given until 2010. It references nobel prizes. You can modify this list by adding new Nobel Prizes, and removing or updating the information contained in this database. You can also search among the nobel prizes on the name, the year and the different categories. </p>


<?php require "end.html"; ?>