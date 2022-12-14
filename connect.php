<?php
    try {
    $db = new PDO('mysql:host=localhost;dbname=nobel', 'root', '');
    } catch (PDOException $e) {
    echo $e->getMessage();
    }
?>