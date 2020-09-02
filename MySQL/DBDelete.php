<?php
function DELETE($id){
$servername = 'localhost';
$username = 'root';
$pass = 'root';
$dbname = 'product';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql_del = "DELETE FROM products WHERE id=$id";
  $conn=exec($sql_del);
  echo "DELETED";
}
catch (PDOException $e) {
  echo "Error:". $e->getMessage();
}
$conn=null;
}