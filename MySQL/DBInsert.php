<?php

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

$err = $errD = 0;
$name = $cost = $quantity = $deleteId = '';
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
if (!empty($_POST['delete'])) {
  $deleteId = $_POST['delete'];
} else {
  $errD++;
}

try {
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if ($err == 0) {
    $sqlQuer1 = "INSERT INTO products (nameProduct, costProduct, quantity) VALUES ('$name', '$cost', '$quantity');";
    $conn->exec($sqlQuer1);
    header("location: DBAccess.php");
    echo 'insert new data OK!';
  }
  if ($errD == 0) {
    $sql_del = "DELETE FROM products WHERE id=$deleteId;";
    $conn->exec($sql_del);
    header("location: DBAccess.php");
    echo 'insert new data OK!';
  }
} catch (PDOException $e) {
  echo $sqlQuer1 . '<br>' . $e->getMessage();
}