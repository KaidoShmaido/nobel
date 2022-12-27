<?php

// Récupérer le nombre de prix nobels dans la base de données pour l'afficher à la place de TO FILL.


require "begin.html";
require "Model.php";
$model = new Model();
$last=$model->get_last();
?>
<h1> List of the nobel prizes </h1>

<p> Welcome to the website listing the different nobel prizes given until 2010. It references nobel prizes. You can modify this list by adding new Nobel Prizes, and removing or updating the information contained in this database. You can also search among the nobel prizes on the name, the year and the different categories. </p>
<table>
    <tr>
        <th>YEAR</th>
        <th>categorie</th>
        <th>name</th>
    </tr>
    <?php foreach($last as $last) : ?>
        <tr>
            <td><?=$last['year'];?> </td>
            <td><?=$last['category'];?> </td>
            <td><?=$last['name'];?> </td>

        </tr>
    <?php endforeach;?>

</table>

<?php require "end.html"; ?>