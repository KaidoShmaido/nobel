<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Content/css/nobel.css">
</head>
<body>

</body>
</html> -->

<?php

// Récupérer le nombre de prix nobels dans la base de données pour l'afficher à la place de TO FILL.


require "begin.html";
?>
<h1> List of the nobel prizes </h1>

<p> Welcome to the website listing the different nobel prizes given until 2010. It references <strong>TO FILL</strong> nobel prizes. You can modify this list by adding new Nobel Prizes, and removing or updating the information contained in this database. You can also search among the nobel prizes on the name, the year and the different categories. </p>
<?php require_once 'database.php';

$sql = "select * from nobels order by year desc limit 25";
$res = $conn->query($sql);
$last = $res->fetchAll(PDO::FETCH_ASSOC);    
?>
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