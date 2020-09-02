<?php
$servername = 'localhost';
$username = 'root';
$pass = 'root';
$dbname = 'product';
// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sqlQuer = "INSERT INTO products (nameProduct, costProduct, quantity) VALUES ('Meat', '90', '60');";
//   $conn->exec($sqlQuer);
//   echo 'insert OK!';
// } catch (PDOException $e) {
//   echo $sqlQuer . '<br>' . $e->getMessage();
// }
// $conn = null;

$err = 0;
$name = $cost = $quantity = '';
if (!empty($_POST['name'])) {
  $name = $_POST['name'];
} else {
  $err++;
}
if (!empty($_POST['cost'])) {
  $cost = $_POST['cost'];
} else {
  $err++;
}
if (!empty($_POST['quantity'])) {
  $quantity = $_POST['quantity'];
} else {
  $err++;
}
if ($err == 0) {
  try {
    $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
    $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sqlQuer1 = "INSERT INTO products (nameProduct, costProduct, quantity) VALUES ('$name', '$cost', '$quantity');";
    $conn1->exec($sqlQuer1);
    header("Location: DBAccess.php");
    echo 'insert new data OK!';
  } catch (PDOException $e) {
    echo $sqlQuer1 . '<br>' . $e->getMessage();
  }
} else {
  echo 'input all fields';
}

$conn1 = null;