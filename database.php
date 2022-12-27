<?php
$servername = "localhost:1234";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=prixnoble", $username, $password);
  
  // set the PDO error mode to exception
  // echo "ok";
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // var_dump($conn);---->  test de connexion database
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>