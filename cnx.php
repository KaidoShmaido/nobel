<?php
$dsn = 'mysql:host=localhost;dbname=prixnoble;charset=utf8';
$user = 'root';
$pass = '';

try{
    $Cnx = new PDO($dsn, $user, $pass);
    // echo '<mark>Connected with SUCCEFULY</mark>';
}
catch(PDOException $e){
    echo 'Erreur de connexion';
}

?>