<?php
$servername = 'localhost';
$username = 'root';
$pass = 'root';
$dbname = 'product';
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'DB IS CONETCTED';
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}