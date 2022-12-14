<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Content/css/nobel.css"/>
</head>
<body>
    
<?php
    require_once 'connect.php';
?>
    <?php
        
        $sql = "SELECT * FROM nobels ORDER BY year DESC LIMIT 25";
        $result = $db->query($sql);
        $last = $result->fetchAll(PDO::FETCH_ASSOC);
        ?>
        
        <table >
            <tr>
                <th>Year</th>
                <th>Category</th>
                <th>Name</th>
                
            </tr>

            <?php foreach ($last as $last) : ?>
                <tr>
                    <td><?= $last['year'] ?></td>
                    <td><?= $last['category'] ?></td>
                    <td><?= $last['name'] ?></td>
                </tr>
            <?php endforeach; ?>    
        
        </table>

        <?php 
     
     
       // Prepare the query
    $stmt = $db->prepare('SELECT * FROM nobels ORDER BY year DESC LIMIT 25
    ');



    // Execute the query
    $stmt->execute();

    // Fetch the rows as an associative array
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
 
   
     


</body>
</html>